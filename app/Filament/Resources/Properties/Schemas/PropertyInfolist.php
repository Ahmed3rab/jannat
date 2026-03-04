<?php

namespace App\Filament\Resources\Properties\Schemas;

use App\Models\Property;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PropertyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('uuid')
                    ->label('UUID'),
                TextEntry::make('reference'),
                TextEntry::make('title')
                    ->columnSpanFull(),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('brief')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('price')
                    ->money()
                    ->placeholder('-'),
                TextEntry::make('offer')
                    ->badge(),
                TextEntry::make('type.name')
                    ->label('Type'),
                TextEntry::make('category.name')
                    ->label('Category'),
                TextEntry::make('area')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('floors')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('floored_area')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('rooms')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('parking_capacity')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('published_at')
                    ->dateTime(),
                TextEntry::make('delivery_date')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('meta_title')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('meta_description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('meta_image')
                    ->placeholder('-'),
                TextEntry::make('location_id')
                    ->numeric(),
                TextEntry::make('nearest_landmark')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('map_url')
                    ->placeholder('-'),
                TextEntry::make('latitude')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('longitude')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Property $record): bool => $record->trashed()),
                TextEntry::make('rooms_total')
                    ->numeric(),
                TextEntry::make('main_rooms_total')
                    ->numeric(),
                TextEntry::make('saloons_total')
                    ->numeric(),
                TextEntry::make('living_rooms_total')
                    ->numeric(),
                TextEntry::make('kitchens_total')
                    ->numeric(),
                TextEntry::make('bathrooms_total')
                    ->numeric(),
                TextEntry::make('offices_total')
                    ->numeric(),
                TextEntry::make('ac_units_total')
                    ->numeric(),
                IconEntry::make('is_fully_furnished')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
