<?php

namespace App\Filament\Resources\CatatanProduks\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CatatanProdukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('tgl_transaksi')->label('Tgl. Transaksi')->required(),
                TextInput::make('nama_produk')->label('Nama Produk')->required(),
                TextInput::make('qty')->label('Qty')->numeric()->required(),
                TextInput::make('harga')->label('Harga (RM)')->numeric()->required(),
                TextInput::make('total')->label('Total (RM)')->numeric()->required(),
                TextInput::make('metode_pembayaran')->label('Metode Pembayaran')->required(),
                Select::make('status_pembayaran')->label('Status Pembayaran')->options([
                    'Belum Dibayar' => 'Belum Dibayar',
                    'Dibayar' => 'Dibayar',
                    'Pending' => 'Pending',
                ])->required(),
            ]);
    }
}
