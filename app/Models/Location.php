<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Spatie\Translatable\HasTranslations;

class Location extends Model
{
    use HasTranslations;
    use HasSlug;

    public array $translatable = ['name'];

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'level',
    ];

    protected static function booted(): void
    {
        static::updating(function ($location) {
            if ($location->getOriginal('slug') === 'libya') {
                throw new \Exception('Libya location is locked.');
            }
        });

        static::deleting(function ($location) {
            if ($location->slug === 'libya') {
                throw new \Exception('Libya location cannot be deleted.');
            }
        });
    }

    /**
     * @return BelongsTo<Location,Location>
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    /**
     * @return HasMany<Location,Location>
     */
    public function children(): HasMany
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    /**
     * @return HasMany<Property,Location>
     */
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function isCountry(): bool
    {
        return $this->level === 0;
    }

    public function isCity(): bool
    {
        return $this->level === 1;
    }

    public function isDistrict(): bool
    {
        return $this->level === 2;
    }

    public function isArea(): bool
    {
        return $this->level === 3;
    }
}
