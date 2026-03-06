<?php

namespace App\Filament\Resources\Properties\Schemas;

use App\Enums\Offer;
use App\Enums\PropertyStatus;
use App\Filament\Resources\Properties\Schemas\Sections\BasicInfo;
use App\Filament\Resources\Properties\Schemas\Sections\Classification;
use App\Filament\Resources\Properties\Schemas\Sections\Details;
use App\Filament\Resources\Properties\Schemas\Sections\Features;
use App\Filament\Resources\Properties\Schemas\Sections\Location;
use App\Models\Property;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Grid::make()->columns(12)->columnSpanFull()->schema([
                Section::make()
                    ->columnSpan(8)
                    ->heading(__('filament.property.sections.basic_info'))
                    ->schema([
                        Tabs::make('Property')
                            ->contained(true)
                            ->tabs([
                                BasicInfo::make(),
                                Classification::make(),
                                Details::make(),
                                Features::make(),
                                Location::make(),
                            ])
                            ->columnSpan(8),
                    ]),
                Section::make()
                    ->columnSpan(4)
                    ->heading(__('filament.property.sections.meta_column'))
                    ->schema([
                        Grid::make()->columns(2)->schema([
                            TextInput::make('price')
                                ->label(__('filament.property.fields.price'))
                                ->numeric()
                                ->required(),
                            Select::make('offer')
                                ->label(__('filament.property.fields.offer'))
                                ->options(Offer::options())
                                ->required(),
                        ]),

                        Select::make('status')
                            ->label(__('filament.property.fields.status'))
                            ->options(PropertyStatus::options())
                            ->default(PropertyStatus::Draft->value)
                            ->live()
                            ->required(),
                        DatePicker::make('publised_at')
                            ->label(__('filament.property.fields.published_at'))
                            ->visible(fn(Get $get) => $get('status') == PropertyStatus::Published->value)
                            ->nullable(),
                        DatePicker::make('delivery_date')
                            ->label(__('filament.property.fields.delivery_date'))
                            ->nullable(),
                    ]),
            ]),
        ]);
    }

    /**
     * @param array<int,mixed> $data
     */
    public static function afterSave(Property $record, array $data): void
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

    /**
     * @param array<int,mixed> $data
     * @return array<int,mixed>
     */
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
