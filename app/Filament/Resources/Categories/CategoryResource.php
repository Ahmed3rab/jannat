<?php

namespace App\Filament\Resources\Categories;

use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Models\Category;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Resources\ResourceConfiguration;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Resource<Model,ResourceConfiguration>
 */
class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name.ar')
                ->label(__('filament.category.fields.name.ar'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->required(),
            TextInput::make('name.en')
                ->label(__('filament.category.fields.name.en'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.category.fields.name.ar'))
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('name', 'ar')),
            ])
            ->actions([
                EditAction::make()->modalWidth('md'),
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
            'index' => ListCategories::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament.category.label.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.category.label.plural');
    }
}
