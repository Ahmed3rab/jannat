<?php

namespace App\Filament\Resources\Locations\Schemas;

use App\Enums\LocationLevel;
use App\Models\Location;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->columns(2)->columnSpanFull()->schema([
                    Select::make('level')
                        ->label(__('filament.location.fields.level'))
                        ->options([
                            LocationLevel::COUNTRY->value => LocationLevel::COUNTRY->label(),
                            LocationLevel::CITY->value => LocationLevel::CITY->label(),
                            LocationLevel::DISTRICT->value => LocationLevel::DISTRICT->label(),
                            LocationLevel::AREA->value => LocationLevel::AREA->label(),
                        ])
                        ->required()
                        ->reactive(),
                    Select::make('parent_id')
                        ->label(__('filament.location.fields.parent'))
                        ->nullable()
                        ->options(function ($get) {
                            $level = $get('level');
                            if ($level === null) {
                                return [];
                            }
                            if ((int) $level === LocationLevel::COUNTRY->value) {
                                return [];
                            }
                            return Location::query()
                                ->where('level', (int) $level - 1)
                                ->orderBy('id')
                                ->get()
                                ->mapWithKeys(function ($location) {
                                    $indent = str_repeat('— ', $location->level);
                                    return [$location->id => $indent . $location->getTranslation('name', 'ar'),];
                                });
                        })
                        ->required(fn($get) => (int) $get('level') !== LocationLevel::COUNTRY->value)
                        ->disabled(fn($get) => (int) $get('level') === LocationLevel::COUNTRY->value)
                        ->reactive(),
                    TextInput::make('name.ar')
                        ->label(__('filament.location.fields.name.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(70)
                        ->required(),
                    TextInput::make('name.en')
                        ->label(__('filament.location.fields.name.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(70)
                        ->required(),
                ]),
            ]);
    }
}
