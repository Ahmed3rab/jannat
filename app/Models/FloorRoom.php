<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FloorRoom extends Model
{
    protected $fillable = [
        'property_floor_id',
        'rooms',
        'main_rooms',
        'saloons',
        'living_rooms',
    ];

    /**
     * @return BelongsTo<PropertyFloor,FloorRoom>
     */
    public function floor(): BelongsTo
    {
        return $this->belongsTo(PropertyFloor::class, 'property_floor_id');
    }
}
