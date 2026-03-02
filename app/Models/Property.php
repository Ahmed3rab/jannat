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

    protected static function booted(): void
    {
        static::creating(function (Property $property) {
            if (empty($property->reference)) {
                $property->reference = self::generateReference();
            }
        });

        static::saved(function ($room) {
            $property = $room->floor->property;

            $totals = $property->floors()
                ->with('rooms')
                ->get()
                ->reduce(function ($carry, $floor) {
                    if ($floor->rooms) {
                        $carry['rooms'] += $floor->rooms->rooms;
                        $carry['main_rooms'] += $floor->rooms->main_rooms;
                        $carry['saloons'] += $floor->rooms->saloons;
                        $carry['living_rooms'] += $floor->rooms->living_rooms;
                    }
                    if ($floor->services) {
                        $carry['kitchens'] += $floor->services->kitchens;
                        $carry['bathrooms'] += $floor->services->bathrooms;
                        $carry['offices'] += $floor->services->offices;
                        $carry['ac_units'] += $floor->services->ac_units;

                        if ($floor->services->getTranslation('furnishing', app()->getLocale()) === 'Full') {
                            $carry['fully_furnished'] = true;
                        }
                    }
                    return $carry;
                }, ['rooms' => 0, 'main_rooms' => 0, 'saloons' => 0, 'living_rooms' => 0,]);

            $property->update([
                'rooms_total' => $totals['rooms'],
                'main_rooms_total' => $totals['main_rooms'],
                'saloons_total' => $totals['saloons'],
                'living_rooms_total' => $totals['living_rooms'],
                'kitchens_total' => $totals['kitchens'],
                'bathrooms_total' => $totals['bathrooms'],
                'offices_total' => $totals['offices'],
                'ac_units_total' => $totals['ac_units'],
                'is_fully_furnished' => $totals['fully_furnished'],
            ]);
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

    /**
     * @return BelongsToMany
     */
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class)->withPivot('value')->withTimestamps();
    }
}
