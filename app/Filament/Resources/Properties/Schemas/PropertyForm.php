<?php

namespace App\Filament\Resources\Properties\Schemas;

use App\Filament\Resources\Properties\Schemas\Sections\BasicInfo;
use App\Filament\Resources\Properties\Schemas\Sections\Classification;
use App\Filament\Resources\Properties\Schemas\Sections\Details;
use App\Filament\Resources\Properties\Schemas\Sections\Features;
use App\Filament\Resources\Properties\Schemas\Sections\Location;
use App\Models\FeatureGroup;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Tabs::make('Property')
                ->tabs([
                    BasicInfo::make(),
                    Classification::make(),
                    Details::make(),
                    Features::make(),
                    Location::make(),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function afterSave(Model $record, array $data): void
    {
        if (!isset($data['features'])) {
            return;
        }

        $sync = [];

        foreach ($data['features'] as $featureId => $value) {

            if ($value === null || $value === '') {
                continue;
            }

            $sync[$featureId] = [
                'value' => is_bool($value) ? ($value ? '1' : '0') : $value,
            ];
        }

        $record->features()->sync($sync);
    }

    public static function mutateFormDataBeforeFill(array $data): array
    {
        $features = [];

        foreach ($data['features'] ?? [] as $feature) {
            $features[$feature['id']] = $feature['pivot']['value'];
        }

        $data['features'] = $features;

        return $data;
    }
}
