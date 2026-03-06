<?php

namespace App\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class MoneyLYDColumn extends TextColumn
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->formatStateUsing(function ($state) {

            if ($state === null) {
                return '—';
            }

            return number_format((float) $state, 0) . ' د.ل';
        });
    }
}
