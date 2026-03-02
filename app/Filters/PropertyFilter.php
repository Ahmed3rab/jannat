<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PropertyFilter
{
    /**
     * @param Builder<Model> $query
     * @param array<int,mixed> $filters
     */
    public function __construct(protected Builder $query, protected array $filters) {}

    /**
     * @return Builder<Model>
     */
    public function apply(): Builder
    {
        $this->query->whereNotNull('published_at');

        foreach ($this->filters as $name => $value) {
            if (method_exists($this, $name) && filled($value)) {
                $this->$name($value);
            }
        }

        return $this->query;
    }

    /*
    * @param mixed $value
    */
    protected function offer($value): void
    {
        $this->query->where('offer', $value);
    }

    /**
     * @param mixed $value
     */
    protected function type_id($value): void
    {
        $this->query->where('type_id', $value);
    }

    /**
     * @param mixed $value
     */
    protected function category_id($value): void
    {
        $this->query->where('category_id', $value);
    }

    /*
    * @param mixed $value
    */
    protected function min_price($value): void
    {
        $this->query->where('price', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function max_price($value): void
    {
        $this->query->where('price', '<=', $value);
    }

    /*
    * @param mixed $value
    */

    protected function min_area($value): void
    {
        $this->query->where('area', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function max_area($value): void
    {
        $this->query->where('area', '<=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function min_floored_area($value): void
    {
        $this->query->where('floored_area', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function max_floored_area($value): void
    {
        $this->query->where('floored_area', '<=', $value);
    }

    /*
    * @param mixed $value
    */
    protected function rooms($value): void
    {
        $this->query->where('rooms_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function main_rooms($value): void
    {
        $this->query->where('main_rooms_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function saloons($value): void
    {
        $this->query->where('saloons_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function living_rooms($value): void
    {
        $this->query->where('living_rooms_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function kitchens($value): void
    {
        $this->query->where('kitchens_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function bathrooms($value): void
    {
        $this->query->where('bathrooms_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function offices($value): void
    {
        $this->query->where('offices_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function ac_units($value): void
    {
        $this->query->where('ac_units_total', '>=', $value);
    }

    /**
     * @param mixed $value
     */
    protected function furnished($value): void
    {
        if ($value) {
            $this->query->where('is_fully_furnished', true);
        }
    }

    /**
     * @param mixed $value
     */
    protected function parking($value): void
    {
        $this->query->where('parking_capacity', '>=', $value);
    }

    /*
    * @param mixed $value
    */
    protected function location_id($value): void
    {
        $locationIds = DB::select("
            WITH RECURSIVE location_tree AS (
                SELECT id FROM locations WHERE id = ?
                UNION ALL
                SELECT l.id
                FROM locations l
                INNER JOIN location_tree lt ON l.parent_id = lt.id
            )
            SELECT id FROM location_tree
        ", [$value]);

        $ids = collect($locationIds)->pluck('id');

        $this->query->whereIn('location_id', $ids);
    }

    /*
    * @param array<int,mixed> $features
    */
    protected function features(array $features): void
    {
        foreach ($features as $slug => $value) {

            $this->query->whereHas('features', function ($q) use ($slug, $value) {

                $q->where('slug', $slug);

                if ($value !== true) {
                    $q->where('property_feature.value', $value);
                }
            });
        }
    }

    /*
    * @param mixed $value
    */
    protected function sort($value): void
    {
        match ($value) {
            'price_asc' => $this->query->orderBy('price'),
            'price_desc' => $this->query->orderByDesc('price'),
            'newest' => $this->query->orderByDesc('published_at'),
            'area_desc' => $this->query->orderByDesc('area'),
            'rooms_desc' => $this->query->orderByDesc('rooms_total'),
            default => $this->query->orderByDesc('published_at'),
        };
    }
}
