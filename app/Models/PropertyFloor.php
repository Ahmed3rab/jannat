<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

class PropertyFloor extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'property_id',
        'name',
        'sort_order',
        'floor_number',
        'area',
        'floored_area',
    ];

    /**
     * @return BelongsTo<Property,PropertyFloor>
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * @return HasOne<FloorRoom,PropertyFloor>
     */
    public function rooms(): HasOne
    {
        return $this->hasOne(FloorRoom::class);
    }

    /**
     * @return HasOne<FloorService,PropertyFloor>
     */
    public function services(): HasOne
    {
        return $this->hasOne(FloorService::class);
    }
}
