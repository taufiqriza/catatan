<?php

namespace App\Filament\Resources\CatatanProduks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CatatanProduksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_transaksi')->label('ID Transaksi'),
                TextColumn::make('tgl_transaksi')->label('Tgl. Transaksi')->date(),
                TextColumn::make('nama_produk')->label('Nama Produk')->inline(),
                TextColumn::make('qty')->label('Qty')->inline(),
                TextColumn::make('harga')->label('Harga (RM)')->money('MYR')->inline(),
                TextColumn::make('total')->label('Total (RM)')->money('MYR')->inline(),
                TextColumn::make('metode_pembayaran')->label('Metode Pembayaran')->inline(),
                SelectColumn::make('status_pembayaran')->label('Status Pembayaran')->options([
                    'Belum Dibayar' => 'Belum Dibayar',
                    'Dibayar' => 'Dibayar',
                    'Pending' => 'Pending',
                ])->inline(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
