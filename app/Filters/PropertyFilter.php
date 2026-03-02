<?php

use Illuminate\Database\Eloquent\Builder;

class PropertyFilter
{
    public function __construct(protected Builder $query, protected array $filters) {}

    public function apply(): Builder
    {
        foreach ($this->filters as $name => $value) {
            if (method_exists($this, $name) && filled($value)) {
                $this->$name($value);
            }
        }

        return $this->query;
    }

    protected function offer($value)
    {
        $this->query->where('offer', $value);
    }

    protected function min_price($value)
    {
        $this->query->where('price', '>=', $value);
    }

    protected function max_price($value)
    {
        $this->query->where('price', '<=', $value);
    }

    protected function rooms($value)
    {
        $this->query->where('rooms', '>=', $value);
    }

    protected function floors($value)
    {
        $this->query->where('floors', '>=', $value);
    }

    protected function min_area($value)
    {
        $this->query->where('area', '>=', $value);
    }

    protected function max_area($value)
    {
        $this->query->where('area', '<=', $value);
    }

    protected function min_floored_area($value)
    {
        $this->query->where('floored_area', '>=', $value);
    }

    protected function max_floored_area($value)
    {
        $this->query->where('floored_area', '<=', $value);
    }
}
