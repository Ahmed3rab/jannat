<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class BasicInfo
{
    public static function make(): Tab
    {
        return Tab::make('المعلومات الأساسية')
            ->icon(Heroicon::OutlinedHome)
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
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                    RichEditor::make('description.en')
                        ->label(__('filament.property.fields.description.en'))
                        ->minLength(3)
                        ->maxLength(250)
                        ->required(),

                ]),
            ]);
    }
}
