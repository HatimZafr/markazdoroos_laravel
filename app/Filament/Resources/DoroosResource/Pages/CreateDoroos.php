<?php

namespace App\Filament\Resources\DoroosResource\Pages;

use App\Filament\Resources\DoroosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDoroos extends CreateRecord
{
    protected static string $resource = DoroosResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
