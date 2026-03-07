<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Images
{
    public static function make(): Tab
    {
        return Tab::make('الصور')
            ->icon(Heroicon::Film)
            ->schema([
                Section::make('الصورة الرئيسية')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('featured_image')
                            ->hiddenLabel()
                            ->collection('featured_image')
                            ->responsiveImages()
                            ->conversion('preview')
                            ->image()
                            ->imageEditor()
                            ->required(),
                    ]),

                Section::make('معرض الصور')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('gallery')
                            ->hiddenLabel()
                            ->collection('gallery')
                            ->responsiveImages()
                            ->conversion('thumb')
                            ->multiple()
                            ->panelLayout('grid')
                            ->image()
                            ->responsiveImages()
                            ->imageEditor()
                            ->reorderable(),
                    ]),
            ]);

    }
}
