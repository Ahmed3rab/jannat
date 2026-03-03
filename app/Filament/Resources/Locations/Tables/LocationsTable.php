<?php

namespace App\Filament\Resources\Locations\Tables;

use App\Enums\LocationLevel;
use App\Models\Location;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Validation\ValidationException;

class LocationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('level')
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.location.fields.name.ar'))
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('name', 'ar')),
                TextColumn::make('parent')
                    ->label(__('filament.location.fields.parent'))
                    ->formatStateUsing(fn($state, $record) => $record->parent->getTranslation('name', 'ar')),
                TextColumn::make('level')
                    ->label(__('filament.location.fields.level'))
                    ->sortable()
                    ->formatStateUsing(fn($state) => LocationLevel::from($state)->label())
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->modalWidth('lg')
                    ->visible(fn($record) => !($record->level === LocationLevel::COUNTRY->value && $record->slug === 'libya')),
                DeleteAction::make()->requiresConfirmation()
                    ->visible(fn($record) => !($record->level === LocationLevel::COUNTRY->value && $record->slug === 'libya')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
