<?php

namespace App\Filament\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('uuid')
                    ->label('UUID')
                    ->searchable(),
                TextColumn::make('reference')
                    ->searchable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('offer')
                    ->badge()
                    ->searchable(),
                TextColumn::make('type.name')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->searchable(),
                TextColumn::make('area')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('floors')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('floored_area')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('rooms')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('parking_capacity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('delivery_date')
                    ->dateTime()
                    ->sortable(),
                ImageColumn::make('meta_image'),
                TextColumn::make('location_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('map_url')
                    ->searchable(),
                TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('rooms_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('main_rooms_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('saloons_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('living_rooms_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kitchens_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bathrooms_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('offices_total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ac_units_total')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_fully_furnished')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
