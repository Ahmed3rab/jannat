<?php

namespace App\Filament\Resources\Properties\RelationManagers;

use App\Domain\Properties\Aggregators\PropertyAggregator;
use App\Filament\Resources\Properties\PropertyResource;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FloorsRelationManager extends RelationManager
{
    protected static string $relationship = 'floors';

    protected static ?string $relatedResource = PropertyResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Floor Information')
                    ->heading(__('filament.floors.sections.basic_info'))
                    ->schema([
                        TextInput::make('name.ar')
                            ->label(__('filament.floors.fields.name.ar'))
                            ->required(),
                        TextInput::make('name.en')
                            ->label(__('filament.floors.fields.name.en'))
                            ->required(),
                        TextInput::make('floor_number')
                            ->label(__('filament.floors.fields.floor_number'))
                            ->numeric(),
                        TextInput::make('area')
                            ->label(__('filament.floors.fields.area'))
                            ->numeric(),
                        TextInput::make('floored_area')
                            ->label(__('filament.floors.fields.floored_area'))
                            ->numeric(),
                        TextInput::make('sort_order')
                            ->label(__('filament.floors.fields.sort_order'))
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull()
                    ->columns(2),

                Section::make('Room Distribution')
                    ->heading(__('filament.floors.sections.rooms'))
                    ->relationship('rooms')
                    ->schema([
                        TextInput::make('rooms')
                            ->label(__('filament.floors.fields.rooms'))
                            ->numeric(),
                        TextInput::make('main_rooms')
                            ->label(__('filament.floors.fields.main_rooms'))
                            ->numeric(),
                        TextInput::make('saloons')
                            ->label(__('filament.floors.fields.saloons'))
                            ->numeric(),
                        TextInput::make('living_rooms')
                            ->label(__('filament.floors.fields.living_rooms'))
                            ->numeric(),
                    ])
                    ->columnSpanFull()
                    ->columns(4),

                Section::make('Services')
                    ->heading(__('filament.floors.sections.services'))
                    ->relationship('services')
                    ->schema([
                        TextInput::make('kitchens')
                            ->label(__('filament.floors.fields.kitchens'))
                            ->numeric(),
                        TextInput::make('bathrooms')
                            ->label(__('filament.floors.fields.bathrooms'))
                            ->numeric(),
                        TextInput::make('offices')
                            ->label(__('filament.floors.fields.offices'))
                            ->numeric(),
                        TextInput::make('ac_units')
                            ->label(__('filament.floors.fields.ac_units'))
                            ->numeric(),
                        Select::make('furnishing')
                            ->label(__('filament.floors.fields.furnishing'))
                            ->options([
                                'none' => 'غير مفروش',
                                'partial' => 'مفروش جزئياً',
                                'full' => 'مفروش بالكامل',
                            ]),
                    ])
                    ->columnSpanFull()
                    ->columns(5),
            ]);
    }
    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->with(['services', 'rooms']))
            ->columns([
                TextColumn::make('name')->formatStateUsing(fn($state, $record) => $record->getTranslation('name', 'ar')),
                TextColumn::make('floor_number')->label('Floor'),
                TextColumn::make('area'),
                TextColumn::make('floored_area'),
            ])
            ->defaultSort('sort_order')
            ->headerActions([
                CreateAction::make()
                    ->modalHeading(__('filament.floors.modals.create.title'))
                    ->label(__('filament.floors.modals.create.title'))
                    ->after(function ($record) {
                        if (!empty($this->rooms)) {
                            $record->rooms()->create($this->rooms);
                        }

                        if (!empty($this->services)) {
                            $record->services()->create($this->services);
                        }

                        propertyaggregator::recalculate($record->property);
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->modalHeading(__('filament.floors.modals.edit.title'))
                    ->after(function ($record) {
                        if (!empty($this->rooms)) {
                            $record->rooms()->updateOrCreate([], $this->rooms);
                        }
                        if (!empty($this->services)) {
                            $record->services()->updateOrCreate([], $this->services);
                        }
                        PropertyAggregator::recalculate($record->property);
                    }),
                DeleteAction::make()
                    ->modalHeading(__('filament.floors.modals.delete.title'))
                    ->requiresConfirmation(),
            ]);
    }

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('filament.floors.label.plural');
    }
}
