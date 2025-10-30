<?php

namespace App\Filament\Resources\CatatanProduks\Pages;

use App\Filament\Resources\CatatanProduks\CatatanProdukResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCatatanProduks extends ListRecords
{
    protected static string $resource = CatatanProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
