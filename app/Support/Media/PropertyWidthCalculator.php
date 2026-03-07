<?php

namespace App\Support\Media;

use Illuminate\Support\Collection;
use Spatie\MediaLibrary\ResponsiveImages\WidthCalculator\WidthCalculator;

class PropertyWidthCalculator implements WidthCalculator
{
    public function calculateWidths(int $fileSize, int $width, int $height): Collection
    {
        return collect([
            320,
            640,
            1024,
            1366,
            1920,
        ])->filter(fn($size) => $size <= $width);
    }

    public function calculateWidthsFromFile(string $imagePath): Collection
    {
        [$width, $height] = getimagesize($imagePath);

        return $this->calculateWidths(filesize($imagePath), $width, $height);
    }
}
