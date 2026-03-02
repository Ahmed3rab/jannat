<?php

namespace App\Enums;

enum Offer: string
{
    case SELL   = 'sell';
    case RENT   = 'rent';

    public function label(): string
    {
        return match ($this) {
            self::SELL  =>  __('content.offers.sell'),
            self::RENT  =>  __('content.offers.rent'),
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn(self $case) => [
                $case->value => $case->label(),
            ])
            ->toArray();
    }
}
