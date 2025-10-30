<?php

namespace App\Filament\Resources\Pelanggans\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PelangganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')->label('Nama')->required(),
                TextInput::make('email')->label('Email')->email()->required(),
                TextInput::make('telefon')->label('Telefon')->required(),
                Textarea::make('alamat')->label('Alamat')->required(),
            ]);
    }
}
