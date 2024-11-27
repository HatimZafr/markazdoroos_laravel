<?php

namespace App\Filament\Resources\CategoryPaketResource\Pages;

use App\Filament\Resources\CategoryPaketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryPaket extends CreateRecord
{
    protected static string $resource = CategoryPaketResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
