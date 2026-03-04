<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class FeatureGroup extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
    ];

    protected static function booted(): void
    {
        static::creating(function ($group) {
            if (empty($group->slug)) {
                $group->slug = Str::slug(
                    $group->getTranslation('name', 'en')
                );
            }
        });
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
