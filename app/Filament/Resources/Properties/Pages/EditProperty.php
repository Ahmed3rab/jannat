<?php

namespace App\Filament\Resources\Properties\Pages;

use App\Filament\Resources\Properties\PropertyResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProperty extends EditRecord
{
    protected static string $resource = PropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $features = [];

        foreach ($this->record->features as $feature) {

            $value = $feature->pivot->value;

            // Convert boolean features back
            if ($feature->type === 'boolean') {
                $value = $value === '1';
            }

            $features[$feature->id] = $value;
        }

        $data['features'] = $features;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->features = $data['features'] ?? [];

        unset($data['features']);

        return $data;
    }

    protected function afterSave(): void
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
