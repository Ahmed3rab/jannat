<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class FloorService extends Model
{
    use HasTranslations;

    public array $translatable = ['furnishing'];

    protected $fillable = [
        'property_floor_id',
        'kitchens',
        'bathrooms',
        'offices',
        'ac_units',
        'furnishing',
    ];

    /**
     * @return BelongsTo<PropertyFloor,FloorService>
     */
    public function floor(): BelongsTo
    {
        return $this->belongsTo(PropertyFloor::class, 'property_floor_id');
    }
}
