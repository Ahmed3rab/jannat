<?php

namespace App\Models;

use App\Enums\Offer;
use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Property extends Model
{
    use HasTranslations;
    use HasUuids;
    use SoftDeletes;
    use HasSeo;

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

    protected $guarded = ['id'];

    public function getRouteKeyName(): string
    {
        return 'reference';
    }

    public array $translatable = ['title', 'description', 'brief', 'meta_title', 'meta_description'];

    protected function casts(): array
    {
        return [
            'published_at'  => 'datetime:Y-m-d H:i:s',
            'delivery_date' => 'datetime:Y-m-d',
            'offer'         => Offer::class,
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
}
