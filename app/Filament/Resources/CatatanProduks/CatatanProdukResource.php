<?php

namespace App\Filament\Resources\CatatanProduks;

use App\Filament\Resources\CatatanProduks\Pages\CreateCatatanProduk;
use App\Filament\Resources\CatatanProduks\Pages\EditCatatanProduk;
use App\Filament\Resources\CatatanProduks\Pages\ListCatatanProduks;
use App\Filament\Resources\CatatanProduks\Schemas\CatatanProdukForm;
use App\Filament\Resources\CatatanProduks\Tables\CatatanProduksTable;
use App\Models\CatatanProduk;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CatatanProdukResource extends Resource
{
    protected static ?string $model = CatatanProduk::class;

    protected static ?string $navigationLabel = 'Catatan Produk';

    protected static ?string $modelLabel = 'Catatan Produk';

    protected static ?string $pluralModelLabel = 'Catatan Produk';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CatatanProdukForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CatatanProduksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCatatanProduks::route('/'),
            'create' => CreateCatatanProduk::route('/create'),
            'edit' => EditCatatanProduk::route('/{record}/edit'),
        ];
    }
}
