<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class MoneyLYDInput extends TextInput
{
    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->live()
            ->suffix('د.ل')
            ->inputMode('numeric')
            ->extraInputAttributes(['class' => 'text-right'])
            ->afterStateUpdated(function ($state, callable $set) {
                if (! $state) {
                    return;
                }

                $numeric = (int) str_replace(',', '', $state);

                $set('price', number_format($numeric));
            })
            ->formatStateUsing(fn($state) => $state ? number_format($state, 0) : null)
            ->dehydrateStateUsing(fn($state) => $state ? (int) str_replace(',', '', $state) : null);
    }
}
