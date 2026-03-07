<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;

class Location
{
    public static function make(): Tab
    {
        return Tab::make('الموقع الجغرافي')
            ->icon(Heroicon::MapPin)
            ->schema([
                TextEntry::make('location')
                    ->label(__('filament.property.fields.location'))
                    ->formatStateUsing(function ($state, $record) {

                        if (! $record->location) {
                            return null;
                        }

                        $location = $record->location;
                        $parts = [];

                        while ($location) {
                            $parts[] = $location->getTranslation('name', 'ar');
                            $location = $location->parent;
                        }

                        return implode('، ', $parts);
                    }),

                TextEntry::make('nearest_landmark')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('nearest_landmark', 'ar'))
                    ->label(__('filament.property.fields.nearest_landmark.ar')),

                TextEntry::make('nearest_landmark')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('nearest_landmark', 'en'))
                    ->label(__('filament.property.fields.nearest_landmark.en')),

                TextEntry::make('map_url')
                    ->label(__('filament.property.fields.map_url'))
                    ->formatStateUsing(fn($state) => $state ? __('filament.property.actions.open_map') : null)
                    ->url(fn($state) => $state)
                    ->openUrlInNewTab()
                    ->badge()
                    ->icon(Heroicon::Link)
                    ->iconPosition(iconPosition: IconPosition::After)
                    ->color('primary')
                    ->size(TextSize::Medium)
                    ->placeholder(__('filament.general.n/a')),
                ViewEntry::make('map')
                    ->label(__('filament.property.fields.map'))
                    ->columnSpanFull()
                    ->view('filament.infolists.map-preview'),
            ])
            ->columns(2);
    }
}
