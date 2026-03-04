<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class FeatureGroup extends Model
{
    use HasTranslations;
    use HasSlug;

    public array $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
    ];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
