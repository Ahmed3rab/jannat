<?php

namespace App\Filament\Resources\Types;

use App\Filament\Resources\Types\Pages\ListTypes;
use App\Models\Type;
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
use UnitEnum;

/**
 * @extends Resource<Model,ResourceConfiguration>
 */
class TypeResource extends Resource
{
    protected static ?string $model = Type::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHomeModern;

    protected static ?string $recordTitleAttribute = 'name';

    protected static string|UnitEnum|null $navigationGroup = 'تصنيف العقارات';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name.ar')
                ->label(__('filament.type.fields.name.ar'))
                ->string()
                ->minLength(3)
                ->maxLength(50)
                ->required(),
            TextInput::make('name.en')
                ->label(__('filament.type.fields.name.en'))
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
                    ->formatStateUsing(fn($state, $record) => $record->getTranslation('name', 'ar'))
                    ->searchable()
                    ->sortable(),
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
            'index' => ListTypes::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament.type.label.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.type.label.plural');
    }
}
