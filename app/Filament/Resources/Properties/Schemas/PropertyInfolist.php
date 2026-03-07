<?php

namespace App\Filament\Resources\Properties\Schemas;

use App\Enums\PropertyStatus;
use App\Filament\Resources\Properties\Schemas\Infolists\BasicInfo;
use App\Filament\Resources\Properties\Schemas\Infolists\Classification;
use App\Filament\Resources\Properties\Schemas\Infolists\Details;
use App\Filament\Resources\Properties\Schemas\Infolists\Features;
use App\Filament\Resources\Properties\Schemas\Infolists\Location;
use App\Filament\Resources\Properties\Schemas\Infolists\Rooms;
use App\Filament\Resources\Properties\Schemas\Infolists\Services;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PropertyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->columns(12)->columnSpanFull()->schema([
                    Tabs::make('Property')
                        ->contained(true)
                        ->tabs([
                            BasicInfo::make(),
                            Classification::make(),
                            Details::make(),
                            Features::make(),
                            Rooms::make(),
                            Services::make(),
                            Location::make(),
                        ])
                        ->columnSpan(8),

                    Section::make()
                        ->columnSpan(4)
                        ->heading(__('filament.property.sections.meta_column'))
                        ->schema([
                            Grid::make()->columns(3)->schema([
                                TextEntry::make('price')
                                    ->formatStateUsing(fn($state) => number_format($state) . ' د.ل')
                                    ->color('success')
                                    ->weight('semibold')
                                    ->label(__('filament.property.fields.price')),
                                TextEntry::make('offer')
                                    ->label(__('filament.property.fields.offer'))
                                    ->badge()
                                    ->formatStateUsing(fn($state) => $state->label()),
                                TextEntry::make('is_fully_furnished')
                                    ->label(__('filament.property.fields.is_fully_furnished'))
                                    ->badge()
                                    ->formatStateUsing(fn($state) => $state ? __('content.furnishing.full') : __('content.furnishing.none')),
                            ]),
                            Grid::make()->columns(2)->columnSpanFull()->schema([
                                TextEntry::make('status')
                                    ->label(__('filament.property.fields.status'))
                                    ->badge()
                                    ->color(fn($state) => $state->color())
                                    ->formatStateUsing(fn($state) => $state->label()),
                                TextEntry::make('published_at')
                                    ->label(__('filament.property.fields.published_at'))
                                    ->visible(fn(Get $get) => $get('status')->value == PropertyStatus::Published->value)
                                    ->date('Y-m-d'),
                            ]),
                            TextEntry::make('delivery_date')
                                ->label(__('filament.property.fields.delivery_date'))
                                ->date('Y-m-d')
                                ->placeholder(__('filament.general.n/a')),
                        ]),
                ]),
            ]);
    }
}
