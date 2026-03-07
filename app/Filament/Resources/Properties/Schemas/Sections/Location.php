<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Location
{
    public static function make(): Tab
    {
        return Tab::make('الموقع')
            ->icon(Heroicon::MapPin)
            ->schema([
                Grid::make()->columns(2)->columnSpanFull()->schema([
                    Select::make('location_id')
                        ->label(__('filament.property.fields.location'))
                        ->relationship('location', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn($record) => str_repeat('— ', $record->level) . $record->getTranslation('name', 'ar')),
                    TextInput::make('nearest_landmark.ar')
                        ->label(__('filament.property.fields.nearest_landmark.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    TextInput::make('nearest_landmark.en')
                        ->label(__('filament.property.fields.nearest_landmark.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),
                    TextInput::make('map_url')
                        ->label(__('filament.property.fields.map_url'))
                        ->suffixIcon(Heroicon::GlobeAlt)
                        ->url()
                        ->nullable(),
                ]),
            ]);
    }
}
