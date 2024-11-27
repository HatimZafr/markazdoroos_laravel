<?php

namespace App\Filament\Resources\CategoryPaketResource\Pages;

use App\Filament\Resources\CategoryPaketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryPaket extends EditRecord
{
    protected static string $resource = CategoryPaketResource::class;

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
