<?php

namespace App\Enums;

enum LocationLevel: int
{
    case COUNTRY = 0;
    case CITY = 1;
    case DISTRICT = 2;
    case AREA = 3;

    public function label(): string
    {
        return match ($this) {
            self::COUNTRY => __('locations.country'),
            self::CITY =>   __('locations.city'),
            self::DISTRICT => __('locations.district'),
            self::AREA =>   __('locations.area'),
        };
    }
}
