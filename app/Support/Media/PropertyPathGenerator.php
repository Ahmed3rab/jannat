<?php

namespace App\Support\Media;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class PropertyPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        return "properties/{$media->model->uuid}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return "properties/{$media->model->uuid}/conversions/";
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return "properties/{$media->model->uuid}/responsive/";
    }
}
