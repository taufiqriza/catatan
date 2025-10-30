<?php

namespace App\Filament\Resources\KategoriProduks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriProdukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kategori')->label('Nama Kategori')->required(),
            ]);
    }
}
