<?php

namespace App\Filament\Resources\Locations;

use App\Enums\LocationLevel;
use App\Filament\Resources\Locations\Pages\ListLocations;
use App\Filament\Resources\Locations\Schemas\LocationForm;
use App\Filament\Resources\Locations\Tables\LocationsTable;
use App\Models\Location;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Resources\ResourceConfiguration;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @extends Resource<Model,ResourceConfiguration>
 */
class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('parent');
    }

    public static function form(Schema $schema): Schema
    {
        return LocationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLocations::route('/'),
        ];
    }

    public static function canEdit(Model $record): bool
    {
        return !($record->level === LocationLevel::COUNTRY->value
            && $record->slug === 'libya');
    }

    public static function canDelete(Model $record): bool
    {
        return !($record->level === LocationLevel::COUNTRY->value
            && $record->slug === 'libya');
    }

    public static function getModelLabel(): string
    {
        return __('filament.location.label.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.location.label.plural');
    }
}
