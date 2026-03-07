<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Callout;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Services
{
    public static function make(): Tab
    {
        return Tab::make('الوحدات الخدمية')
            ->icon(Heroicon::Sparkles)
            ->schema([
                Callout::make('تنويه')
                    ->description('يتم حساب هذه القيم تلقائيًا من بيانات الطوابق.')
                    ->info()
                    ->columnSpanFull(),
                TextEntry::make('kitchens_total')
                    ->label(__('filament.property.fields.kitchens_total')),
                TextEntry::make('bathrooms_total')
                    ->label(__('filament.property.fields.bathrooms_total')),
                TextEntry::make('offices_total')
                    ->label(__('filament.property.fields.offices_total')),
                TextEntry::make('ac_units_total')
                    ->label(__('filament.property.fields.ac_units_total')),
            ])
            ->columns(4);
    }
}
