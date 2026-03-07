<?php

namespace App\Filament\Resources\Properties\Pages;

use App\Filament\Resources\Properties\PropertyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProperty extends CreateRecord
{
    protected static string $resource = PropertyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->features = $data['features'] ?? [];

        unset($data['features']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $this->syncFeatures();
    }

    protected function syncFeatures(): void
    {
        $features = $this->data['features'] ?? [];

        $sync = [];

        foreach ($features as $featureId => $value) {

            if ($value === null || $value === '') {
                continue;
            }

            $sync[$featureId] = [
                'value' => is_bool($value)
                    ? ($value ? '1' : '0')
                    : (string) $value,
            ];
        }

        $this->record->features()->sync($sync);
    }
}
