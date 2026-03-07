<?php

namespace App\Models;

use App\Enums\Offer;
use App\Enums\PropertyStatus;
use App\Support\Media\PropertyPathGenerator;
use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGeneratorFactory;
use Spatie\Translatable\HasTranslations;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Enums\Unit;
use Spatie\Image\Enums\Fit;

class Property extends Model implements HasMedia
{
    use HasTranslations;
    use HasUuids;
    use SoftDeletes;
    use HasSeo;
    use InteractsWithMedia;

    protected $guarded = ['id'];

    public array $translatable = ['title', 'description', 'brief', 'nearest_landmark'];

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    protected static function booting(): void
    {
        PathGeneratorFactory::setCustomPathGenerators(static::class, PropertyPathGenerator::class);
    }

    protected static function booted(): void
    {
        static::creating(function (Property $property) {
            if (empty($property->reference)) {
                $property->reference = self::generateReference();
            }
        });

        static::saving(function ($property) {
            if ($property->map_url && str_contains($property->map_url, 'maps.app.goo.gl')) {
                try {
                    $headers = get_headers($property->map_url, 1);
                    if (isset($headers['Location'])) {
                        $property->map_url = is_array($headers['Location']) ? end($headers['Location']) : $headers['Location'];
                    }

                } catch (\Exception $e) {
                    // ignore if resolution fails
                }
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
            'status'    => PropertyStatus::class,
            'published_at' => 'datetime',
            'delivery_date' => 'datetime:Y-m-d',
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
        return $this->belongsToMany(Feature::class, 'property_feature')->withPivot('value')->withTimestamps();
    }

    /**
     * @return HasMany<PropertyFloor>
     */
    public function floors(): HasMany
    {
        return $this->hasMany(PropertyFloor::class)->withTrashed();
    }

    /**
     * @return BelongsTo<Location,Property>
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * @param mixed $query
     */
    public function scopePublished($query)
    {
        return $query->where('status', PropertyStatus::Published);
    }

    /**
     * @param mixed $query
     */
    public function scopeLive($query)
    {
        return $query->where('status', PropertyStatus::Published)->where('published_at', '<=', now());
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('featured_image')
            ->useDisk('images')
            ->singleFile();

        $this
            ->addMediaCollection('gallery')
            ->useDisk('images');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('webp')
            ->fit(Fit::Max, 2500, 2500)
            ->optimize()
            ->watermark(resource_path('images/watermark.png'), AlignPosition::BottomRight, paddingX: 20, paddingY: 20, paddingUnit: Unit::Percent)
            ->format('webp')
            ->quality(85)
            ->performOnCollections('featured_image', 'gallery')
            ->withResponsiveImages();

        $this
            ->addMediaConversion('thumb')
            ->watermark(resource_path('images/watermark.png'), AlignPosition::BottomRight, paddingX: 20, paddingY: 20, paddingUnit: Unit::Percent)
            ->format('webp')
            ->width(400)
            ->height(300)
            ->sharpen(10)
            ->performOnCollections('gallery');

        $this
            ->addMediaConversion('preview')
            ->watermark(resource_path('images/watermark.png'), AlignPosition::BottomRight, paddingX: 20, paddingY: 20, paddingUnit: Unit::Percent)
            ->format('webp')
            ->width(1200)
            ->height(800)
            ->performOnCollections('featured_image', 'gallery');
    }
}
