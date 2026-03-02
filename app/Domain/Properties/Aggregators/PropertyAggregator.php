<?php

namespace App\Domain\Properties\Aggregators;

use App\Models\Property;
use Illuminate\Support\Facades\DB;

class PropertyAggregator
{
    public static function recalculate(Property $property): void
    {
        // Aggregate rooms
        $roomsTotals = DB::table('floor_rooms')
            ->join('property_floors', 'floor_rooms.property_floor_id', '=', 'property_floors.id')
            ->where('property_floors.property_id', $property->id)
            ->selectRaw('
                SUM(rooms) as rooms_total,
                SUM(main_rooms) as main_rooms_total,
                SUM(saloons) as saloons_total,
                SUM(living_rooms) as living_rooms_total
            ')
            ->first();

        // Aggregate services
        $servicesTotals = DB::table('floor_services')
            ->join('property_floors', 'floor_services.property_floor_id', '=', 'property_floors.id')
            ->where('property_floors.property_id', $property->id)
            ->selectRaw('
                SUM(kitchens) as kitchens_total,
                SUM(bathrooms) as bathrooms_total,
                SUM(offices) as offices_total,
                SUM(ac_units) as ac_units_total,
                MAX(CASE WHEN furnishing = "full" THEN 1 ELSE 0 END) as is_fully_furnished
            ')
            ->first();

        $property->update([
            'rooms_total' => $roomsTotals->rooms_total ?? 0,
            'main_rooms_total' => $roomsTotals->main_rooms_total ?? 0,
            'saloons_total' => $roomsTotals->saloons_total ?? 0,
            'living_rooms_total' => $roomsTotals->living_rooms_total ?? 0,
            'kitchens_total' => $servicesTotals->kitchens_total ?? 0,
            'bathrooms_total' => $servicesTotals->bathrooms_total ?? 0,
            'offices_total' => $servicesTotals->offices_total ?? 0,
            'ac_units_total' => $servicesTotals->ac_units_total ?? 0,
            'is_fully_furnished' => (bool) ($servicesTotals->is_fully_furnished ?? 0),
        ]);
    }
}
