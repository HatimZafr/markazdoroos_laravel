<?php

namespace App\Filament\Resources\DoroosResource\Pages;

use App\Filament\Resources\DoroosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoroos extends EditRecord
{
    protected static string $resource = DoroosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
