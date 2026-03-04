<?php

namespace App\Filament\Resources\FeatureGroups;

use App\Filament\Resources\FeatureGroups\Pages\CreateFeatureGroup;
use App\Filament\Resources\FeatureGroups\Pages\EditFeatureGroup;
use App\Filament\Resources\FeatureGroups\Pages\ListFeatureGroups;
use App\Filament\Resources\FeatureGroups\Schemas\FeatureGroupForm;
use App\Filament\Resources\FeatureGroups\Tables\FeatureGroupsTable;
use App\Models\FeatureGroup;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class FeatureGroupResource extends Resource
{
    protected static ?string $model = FeatureGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Grid::make()->columns(3)->columnSpanFull()->schema([
                TextInput::make('name.ar')
                    ->label(__('filament.feature_group.fields.name.ar'))
                    ->string()
                    ->minLength(3)
                    ->maxLength(50)
                    ->required(),
                TextInput::make('name.en')
                    ->label(__('filament.feature_group.fields.name.en'))
                    ->string()
                    ->minLength(3)
                    ->maxLength(50)
                    ->required()
                    ->live(onBlur: true),
                TextInput::make('sort_order')
                    ->label(__('filament.feature_group.fields.sort_order'))
                    ->numeric()
                    ->default(0),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.feature_group.fields.name.ar'))
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('name', app()->getLocale())),
                TextColumn::make('sort_order')
                    ->label(__('filament.feature_group.fields.sort_order'))
                    ->sortable(),
            ])
            ->actions([
                EditAction::make()->modalWidth('lg'),
                DeleteAction::make()->requiresConfirmation(),
            ]);
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
            'index' => ListFeatureGroups::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament.feature_group.label.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.feature_group.label.plural');
    }
}
