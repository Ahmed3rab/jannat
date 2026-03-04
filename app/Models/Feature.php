<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Feature extends Model
{
    use HasTranslations;
    use HasSlug;

    public array $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
        'type',
        'feature_group_id',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class)->withPivot('value')->withTimestamps();
    }

    public function options()
    {
        return $this->hasMany(FeatureOption::class);
    }

    public function group()
    {
        return $this->belongsTo(FeatureGroup::class, 'feature_group_id');
    }
}
