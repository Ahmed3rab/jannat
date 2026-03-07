<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Details
{
    public static function make(): Tab
    {
        return Tab::make('التفاصيل')
            ->icon(Heroicon::OutlinedBuildingOffice2)
            ->schema([
                TextEntry::make('area')
                    ->label(__('filament.property.fields.area'))
                    ->suffix(' م²'),
                TextEntry::make('floored_area')
                    ->label(__('filament.property.fields.floored_area'))
                    ->suffix(' م²'),
                TextEntry::make('floors')
                    ->numeric()
                    ->label(__('filament.property.fields.floors')),
                TextEntry::make('rooms')
                    ->numeric()
                    ->label(__('filament.property.fields.rooms')),
                TextEntry::make('parking_capacity')
                    ->numeric()
                    ->label(__('filament.property.fields.parking_capacity')),
            ])
            ->columns(5);
    }
}
