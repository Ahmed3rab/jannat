<?php

namespace App\Filament\Resources\Features;

use App\Filament\Resources\Features\Pages\ListFeatures;
use App\Models\Feature;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Resources\ResourceConfiguration;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @extends Resource<Model,ResourceConfiguration>
 */
class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAdjustmentsHorizontal;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name.ar')
                ->label(__('filament.feature.fields.name.ar'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->required(),
            TextInput::make('name.en')
                ->label(__('filament.feature.fields.name.en'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

            Select::make('type')
                ->label(__('filament.feature.fields.type'))
                ->options([
                    'boolean'   => __('filament.feature.fields.types.boolean'),
                    'number'    => __('filament.feature.fields.types.number'),
                    'select'    => __('filament.feature.fields.types.select'),
                ])
                ->live()
                ->required(),
            Repeater::make('options')
                ->label(__('filament.feature.fields.type_options.label'))
                ->relationship()
                ->schema([
                    TextInput::make('value.en')
                        ->label(__('filament.feature.fields.type_options.value.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(50)
                        ->required(),

                    TextInput::make('value.ar')
                        ->label(__('filament.feature.fields.type_options.value.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(50)
                        ->required(),
                ])
                ->visible(fn(Get $get) => $get('type') === 'select')
                ->collapsed(),
            TextInput::make('group')
                ->label(__('filament.feature.fields.group'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->placeholder(__('filament.feature.fields.group_hint')),
            Hidden::make('slug'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.feature.fields.name.ar'))
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('name', app()->getLocale())),
                TextColumn::make('type')
                    ->label(__('filament.feature.fields.type'))
                    ->formatStateUsing(fn($state) => __('filament.feature.fields.types.' . $state))
                    ->badge(),
                TextColumn::make('group')
                    ->label(__('filament.feature.fields.group')),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->modalWidth('lg'),
                DeleteAction::make()->requiresConfirmation(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index' => ListFeatures::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament.feature.label.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.feature.label.plural');
    }
}
