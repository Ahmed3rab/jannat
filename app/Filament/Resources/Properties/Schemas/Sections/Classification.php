<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;

class Classification
{
    public static function make(): Tab
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
}
