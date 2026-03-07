<?php

namespace App\Support\Media;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class PropertyPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        return "properties/{$media->model->uuid}/{$media->collection_name}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return "properties/{$media->model->uuid}/{$media->collection_name}/conversions/";
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return "properties/{$media->model->uuid}/{$media->collection_name}/responsive/";
    }
}
