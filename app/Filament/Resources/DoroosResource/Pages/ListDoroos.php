<?php

namespace App\Filament\Resources\DoroosResource\Pages;

use App\Filament\Resources\DoroosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoroos extends ListRecords
{
    protected static string $resource = DoroosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
