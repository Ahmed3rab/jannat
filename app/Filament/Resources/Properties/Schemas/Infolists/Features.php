<?php

namespace App\Filament\Resources\Properties\Schemas\Infolists;

use App\Models\FeatureGroup;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Features
{
    public static function make(): Tab
    {
        $groups = FeatureGroup::with('features')->orderBy('sort_order')->get();

        $sections = [];

        foreach ($groups as $group) {

            $entries = [];

            foreach ($group->features as $feature) {
                $entries[] = TextEntry::make("feature_{$feature->id}")
                    ->label($feature->getTranslation('name', 'ar'))
                    ->state(function ($record) use ($feature) {

                        $pivot = $record->features->firstWhere('id', $feature->id)?->pivot;

                        if (! $pivot) {
                            return null;
                        }

                        $value = $pivot->value;

                        if ($feature->type === 'boolean') {
                            return $value == '1' ? '✓' : null;
                        }

                        return $value;
                    })
                    ->visible(fn($record) => $record->features->contains('id', $feature->id));
            }

            if (count($entries)) {
                $sections[] = Section::make($group->getTranslation('name', 'ar'))
                    ->schema($entries)
                    ->columns(4);
            }
        }

        return Tab::make('المرافق')
            ->icon(Heroicon::CheckCircle)
            ->schema($sections);
    }
}
