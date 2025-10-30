<?php

namespace App\Filament\Resources\CatatanProduks\Pages;

use App\Filament\Resources\CatatanProduks\CatatanProdukResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCatatanProduk extends EditRecord
{
    protected static string $resource = CatatanProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
