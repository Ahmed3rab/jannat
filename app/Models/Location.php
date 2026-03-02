<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Location extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'level',
    ];

    protected static function booted(): void
    {
        static::creating(function ($location) {
            if (empty($location->slug)) {
                $name = $location->getTranslation('name', 'en') ?? $location->getTranslation('name', 'ar');

                $location->slug = Str::slug($name);
            }
            if ($location->parent_id) {

                $parent = Location::find($location->parent_id);

                if (!$parent) {
                    throw new \Exception('Invalid parent location.');
                }

                if ($location->level !== $parent->level + 1) {
                    throw new \Exception('Hierarchy level mismatch.');
                }
            } else {
                // Only one country allowed
                if ($location->level !== 0) {
                    throw new \Exception('Only country can have no parent.');
                }
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
