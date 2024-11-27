<?php

namespace App\Filament\Resources\CategoryPaketResource\Pages;

use App\Filament\Resources\CategoryPaketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryPakets extends ListRecords
{
    protected static string $resource = CategoryPaketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
