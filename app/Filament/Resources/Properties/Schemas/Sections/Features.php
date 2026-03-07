<?php

namespace App\Filament\Resources\Properties\Schemas\Sections;

use App\Models\FeatureGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class Features
{
    public static function make(): Tab
    {
        $groups = FeatureGroup::with(['features.options'])->orderBy('sort_order')->get();

        $sections = [];

        foreach ($groups as $group) {
            $fields = [];
            foreach ($group->features as $feature) {
                $key = "features.{$feature->id}";
                switch ($feature->type) {
                    case 'boolean':
                        $fields[] = Toggle::make($key)->label($feature->getTranslation('name', 'ar'));
                        break;

                    case 'number':
                        $fields[] = TextInput::make($key)->label($feature->getTranslation('name', 'ar'))->numeric();
                        break;

                    case 'select':
                        $fields[] = Select::make($key)->label($feature->getTranslation('name', 'ar'))->options(
                            $feature->options->mapWithKeys(fn($option) => [
                                $option->id => $option->getTranslation('value', app()->getLocale()),
                            ])
                        );
                        break;
                }
            }

            if (count($fields)) {
                $sections[] = Section::make($group->getTranslation('name', 'ar'))->schema($fields)->columns(4);
            }
        }

        return Tab::make('المرافق')
            ->icon(Heroicon::CheckCircle)
            ->schema($sections);
    }
}
