<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FeatureOption extends Model
{
    use HasTranslations;

    public array $translatable = ['value'];

    protected $fillable = [
        'feature_id',
        'value',
    ];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
