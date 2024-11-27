<?php

namespace App\Filament\Resources\DarsResource\Pages;

use App\Filament\Resources\DarsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDars extends ListRecords
{
    protected static string $resource = DarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
