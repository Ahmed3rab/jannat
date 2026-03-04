<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    protected static function bootHasSlug(): void
    {
        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug($model);
        });

        static::updating(function ($model) {
            // Only regenerate if the source field changed
            if ($model->isDirty(static::slugSourceColumn())) {
                $model->slug = static::generateUniqueSlug($model);
            }
        });
    }

    protected static function generateUniqueSlug($model): string
    {
        $sourceColumn = static::slugSourceColumn();

        // Support Spatie Translatable
        $sourceValue = method_exists($model, 'getTranslation') ? $model->getTranslation($sourceColumn, 'en') : $model->{$sourceColumn};

        $baseSlug = Str::slug($sourceValue);
        $slug = $baseSlug;
        $counter = 1;

        while ($model::where('slug', $slug) ->when($model->exists, fn($query) => $query->where('id', '!=', $model->id)) ->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        return $slug;
    }

    /**
     * Column used as slug source.
     * Override in model if needed.
     */
    protected static function slugSourceColumn(): string
    {
        return 'name';
    }
}
