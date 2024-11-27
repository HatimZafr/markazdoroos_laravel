<?php

namespace App\Filament\Resources\DarsResource\Pages;

use App\Filament\Resources\DarsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDars extends CreateRecord
{
    protected static string $resource = DarsResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
