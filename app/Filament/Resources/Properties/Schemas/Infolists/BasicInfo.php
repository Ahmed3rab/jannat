<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class BasicInfo
{
    public static function make(): Tab
    {
        return Tab::make('المعلومات الأساسية')
            ->icon(Heroicon::OutlinedHome)
            ->schema([
                TextEntry::make('title')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('title', 'ar'))
                    ->label(__('filament.property.fields.title.ar')),
                TextEntry::make('title')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('title', 'en'))
                    ->label(__('filament.property.fields.title.en')),
                TextEntry::make('brief')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('brief', 'ar'))
                    ->label(__('filament.property.fields.brief.ar')),
                TextEntry::make('brief')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('brief', 'en'))
                    ->label(__('filament.property.fields.brief.en')),
                TextEntry::make('description')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('description', 'ar'))
                    ->markdown()
                    ->label(__('filament.property.fields.brief.ar')),
                TextEntry::make('description')
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('description', 'en'))
                    ->markdown()
                    ->label(__('filament.property.fields.brief.en')),
            ])
            ->columns(2);
    }
}
