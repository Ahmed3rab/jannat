<?php

namespace App\Models;

use App\Enums\Offer;
use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Property extends Model
{
    use HasTranslations;
    use HasUuids;
    use SoftDeletes;
    use HasSeo;

    protected $guarded = ['id'];

    public array $translatable = ['title', 'description', 'brief', 'nearest_landmark'];

    protected static function booted(): void
    {
        static::creating(function (Property $property) {
            if (empty($property->reference)) {
                $property->reference = self::generateReference();
            }
        });
    }

    protected static function generateReference(): string
    {
        return 'PR-' . now()->format('Ymd') . '-' . strtoupper(Str::random(4));
    }

    public function getRouteKeyName(): string
    {
        return 'reference';
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'delivery_date' => 'date',
            'offer' => Offer::class,
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
        ];
    }

    /**
     * @return BelongsTo<Category,Property>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo<Type,Property>
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * @return BelongsToMany
     */
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class)->withPivot('value')->withTimestamps();
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
