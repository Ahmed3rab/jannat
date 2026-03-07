<?php

namespace App\Support\Media;

use Illuminate\Support\Collection;
use Spatie\MediaLibrary\ResponsiveImages\WidthCalculator\WidthCalculator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PropertyWidthCalculator implements WidthCalculator
{
    public function calculateWidths(Media $media): array
    {
        return [
            320,
            480,
            640,
            768,
            1024,
            1366,
            1600,
            1920,
            2500,
        ];
    }

    public function calculateWidthsFromFile(string $imagePath): Collection {}
}
