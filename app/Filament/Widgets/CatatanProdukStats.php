<?php

namespace App\Filament\Widgets;

use App\Models\CatatanProduk;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CatatanProdukStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Transaksi', CatatanProduk::count())
                ->description('Total catatan produk')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('primary'),
            Stat::make('Total Pendapatan', 'RM ' . number_format(CatatanProduk::sum('total'), 2))
                ->description('Jumlah total semua transaksi')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),
            Stat::make('Belum Dibayar', CatatanProduk::where('status_pembayaran', 'Belum Dibayar')->count())
                ->description('Transaksi yang belum dibayar')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('danger'),
            Stat::make('Dibayar', CatatanProduk::where('status_pembayaran', 'Dibayar')->count())
                ->description('Transaksi yang sudah dibayar')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
        ];
    }
}