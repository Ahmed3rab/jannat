<?php

namespace App\Filament\Resources\Properties\Tables;

use App\Filament\Tables\Columns\MoneyLYDColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reference')
                    ->label(__('filament.property.fields.reference'))
                    ->searchable(),
                TextColumn::make('offer')
                    ->label(__('filament.property.fields.offer'))
                    ->formatStateUsing(fn($state) => $state->label())
                    ->badge()
                    ->searchable(),
                TextColumn::make('type.name')
                    ->label(__('filament.property.fields.type'))
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label(__('filament.property.fields.category'))
                    ->searchable(),
                MoneyLYDColumn::make('price')
                    ->label(__('filament.property.fields.price'))
                    ->weight('bold')
                    ->color('success')
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('filament.property.fields.status'))
                    ->formatStateUsing(fn($state) => $state->label())
                    ->color(fn($state) => $state->color())
                    ->badge()
                    ->sortable(),
                TextColumn::make('delivery_date')
                    ->label(__('filament.property.fields.delivery_date'))
                    ->date('Y-m-d')
                    ->placeholder(__('filament.general.n/a'))
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label(__('filament.general.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('filament.general.fields.updated_at'))
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
