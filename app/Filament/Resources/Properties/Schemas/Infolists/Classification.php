<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Classification
{
    public static function make(): Tab
    {
        return Tab::make('التصنيف')
            ->icon(Heroicon::OutlinedSquares2x2)
            ->schema([
                TextEntry::make('category.name')
                    ->label(__('filament.property.fields.category'))
                    ->formatStateUsing(fn($state, $record) => $record->category?->getTranslation('name', 'ar')),
                TextEntry::make('type.name')
                    ->label(__('filament.property.fields.type'))
                    ->formatStateUsing(fn($state, $record) => $record->type?->getTranslation('name', 'ar')),
            ])
            ->columns(2);
    }
}
