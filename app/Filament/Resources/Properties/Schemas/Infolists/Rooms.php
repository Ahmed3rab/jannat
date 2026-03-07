<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Callout;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Rooms
{
    public static function make(): Tab
    {
        return Tab::make('الحجرات')
            ->icon(Heroicon::RectangleGroup)
            ->schema([
                Callout::make('تنويه')
                    ->description('يتم حساب هذه القيم تلقائيًا من بيانات الطوابق.')
                    ->info()
                    ->columnSpanFull(),
                TextEntry::make('rooms_total')
                    ->label(__('filament.property.fields.rooms_total')),
                TextEntry::make('main_rooms_total')
                    ->label(__('filament.property.fields.main_rooms_total')),
                TextEntry::make('saloons_total')
                    ->label(__('filament.property.fields.saloons_total')),
                TextEntry::make('living_rooms_total')
                    ->label(__('filament.property.fields.living_rooms_total')),
            ])
            ->columns(4);
    }
}
