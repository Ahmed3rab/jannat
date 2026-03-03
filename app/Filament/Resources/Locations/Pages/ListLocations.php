<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\Locations\LocationResource;
use App\Models\Location;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Validation\ValidationException;

class ListLocations extends ListRecords
{
    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->modalWidth('lg')
                    ->using(function (array $data) {
                        try {
                            return Location::create($data);
                        } catch (ValidationException $e) {
                            throw $e;
                        }
                    }),
        ];
    }
}
