<?php

namespace App\Filament\Resources\Pelanggans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PelanggansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama')->inline(),
                TextColumn::make('email')->label('Email')->inline(),
                TextColumn::make('telefon')->label('Telefon')->inline(),
                TextColumn::make('alamat')->label('Alamat')->inline(),
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
