<?php

namespace App\Filament\Admin\Resources\BukubaruResource\Pages;

use App\Filament\Admin\Resources\BukubaruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBukubarus extends ListRecords
{
    protected static string $resource = BukubaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
