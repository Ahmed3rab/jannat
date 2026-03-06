<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;

class Details
{
    public static function make(): Tab
    {
        return Tab::make('التفاصيل')
            ->schema([
                Grid::make()->columns(3)->columnSpanFull()->schema([
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
                    DatePicker::make('delivery_date')
                        ->label(__('filament.property.fields.delivery_date'))
                        ->nullable(),
                ]),
            ]);
    }
}
