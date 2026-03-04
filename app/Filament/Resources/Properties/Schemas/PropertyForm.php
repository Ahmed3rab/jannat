<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Tabs::make('Property')
                ->tabs([
                    self::basicTab(),
                    self::classificationTab(),
                    self::detailsTab(),
                    self::featuresTab(),
                    self::locationTab(),
                ])
                ->columnSpanFull(),
        ]);
    }
    /**
     * @return Tabs\Tab
     */
    protected static function basicTab(): Tab
    {
        return Tab::make('المعلومات الأساسية')
            ->schema([
                Grid::make()->columns(2)->columnSpanFull()->schema([
                    TextInput::make('title.ar')
                        ->label(__('filament.property.fields.title.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    TextInput::make('title.en')
                        ->label(__('filament.property.fields.title.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    Textarea::make('brief.ar')
                        ->label(__('filament.property.fields.brief.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    Textarea::make('brief.en')
                        ->label(__('filament.property.fields.brief.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    RichEditor::make('description.ar')
                        ->label(__('filament.property.fields.description.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    RichEditor::make('description.en')
                        ->label(__('filament.property.fields.description.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    TextInput::make('price')
                        ->label(__('filament.property.fields.price'))
                        ->numeric()
                        ->required(),

                    Select::make('offer')
                        ->label(__('filament.property.fields.offer'))
                        ->options([
                            'sell' => 'بيع',
                            'rent' => 'إيجار',
                        ])
                        ->required(),
                ]),
            ]);
    }

    /**
     * @return Tabs\Tab
     */
    protected static function classificationTab(): Tab
    {
        return Tab::make('التصنيف')
            ->schema([
                Grid::make()->columns(2)->columnSpanFull()->schema([
                    Select::make('category_id')
                        ->label(__('filament.property.fields.category'))
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn($record) => $record->getTranslation('name', 'ar'))
                        ->reactive(),

                    Select::make('type_id')
                        ->label(__('filament.property.fields.type'))
                        ->relationship('type', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn($record) => $record->getTranslation('name', 'ar')),

                ]),
            ]);
    }
    protected static function locationTab()
    {
        return Tab::make('الموقع')
            ->schema([
                Grid::make()->columns(4)->columnSpanFull()->schema([
                    Select::make('location_id')
                        ->label(__('filament.property.fields.location'))
                        ->relationship('location', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn($record) => str_repeat('— ', $record->level) . $record->getTranslation('name', 'ar')),
                    TextInput::make('nearest_landmark.ar')
                        ->label(__('filament.property.fields.nearest_landmark.ar'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    TextInput::make('nearest_landmark.en')
                        ->label(__('filament.property.fields.nearest_landmark.en'))
                        ->string()
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),
                    TextInput::make('map_url')
                        ->label(__('filament.property.fields.map_url'))
                        ->suffixIcon(Heroicon::GlobeAlt)
                        ->url()
                        ->nullable(),
                ]),
            ]);
    }
    protected static function detailsTab()
    {
        return Tab::make('التفاصيل')
            ->schema([
                Grid::make()->columns(3)->columnSpanFull()->schema([
                    TextInput::make('area')
                        ->label(__('filament.property.fields.area'))
                        ->required()
                        ->numeric(),
                    TextInput::make('floored_area')
                        ->label(__('filament.property.fields.floored_area'))
                        ->required()
                        ->numeric(),
                    TextInput::make('floors')
                        ->label(__('filament.property.fields.floors'))
                        ->required()
                        ->numeric(),
                    TextInput::make('rooms')
                        ->label(__('filament.property.fields.rooms'))
                        ->required()
                        ->numeric(),
                    TextInput::make('parking_capacity')
                        ->label(__('filament.property.fields.parking_capacity'))
                        ->required()
                        ->numeric(),
                    DatePicker::make('delivery_date')
                        ->label(__('filament.property.fields.delivery_date'))
                        ->nullable(),
                ]),
            ]);
    }
    protected static function featuresTab()
    {
        return Tab::make('المرافق')
            ->schema([
                // Dynamic grouped features will go here
            ]);
    }
}
