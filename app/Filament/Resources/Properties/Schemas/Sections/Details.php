<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Details
{
    public static function make(): Tab
    {
        return Tab::make('التفاصيل')
            ->icon(Heroicon::OutlinedBuildingOffice2)
            ->schema([
                Grid::make()->columns(4)->columnSpanFull()->schema([
                    TextInput::make('area')
                        ->label(__('filament.property.fields.area'))
                        ->required()
                        ->numeric(),
                    TextInput::make('floored_area')
                        ->label(__('filament.property.fields.floored_area'))
                        ->required()
                        ->numeric(),
                    TextInput::make('floors')
                        ->label(__('filament.property.fields.floors'))
                        ->required()
                        ->numeric(),
                    TextInput::make('rooms')
                        ->label(__('filament.property.fields.rooms'))
                        ->required()
                        ->numeric(),
                    TextInput::make('parking_capacity')
                        ->label(__('filament.property.fields.parking_capacity'))
                        ->required()
                        ->numeric(),
                ]),
            ]);
    }
}
