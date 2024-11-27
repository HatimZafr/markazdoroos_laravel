<?php

namespace App\Filament\Resources\DarsResource\Pages;

use App\Filament\Resources\DarsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDars extends EditRecord
{
    protected static string $resource = DarsResource::class;

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
