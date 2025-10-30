<?php

namespace Database\Seeders;

use App\Models\CatatanProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatatanProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatatanProduk::create([
            'tgl_transaksi' => '2025-10-01',
            'nama_produk' => 'Buku Nota',
            'qty' => 5,
            'harga' => 10.00,
            'total' => 50.00,
            'metode_pembayaran' => 'Tunai',
            'status_pembayaran' => 'Dibayar',
        ]);

        CatatanProduk::create([
            'tgl_transaksi' => '2025-10-02',
            'nama_produk' => 'Pensil',
            'qty' => 10,
            'harga' => 2.50,
            'total' => 25.00,
            'metode_pembayaran' => 'Kad Kredit',
            'status_pembayaran' => 'Belum Dibayar',
        ]);

        CatatanProduk::create([
            'tgl_transaksi' => '2025-10-03',
            'nama_produk' => 'Kertas A4',
            'qty' => 20,
            'harga' => 5.00,
            'total' => 100.00,
            'metode_pembayaran' => 'Online Banking',
            'status_pembayaran' => 'Pending',
        ]);

        CatatanProduk::create([
            'tgl_transaksi' => '2025-10-04',
            'nama_produk' => 'Pen Marker',
            'qty' => 3,
            'harga' => 15.00,
            'total' => 45.00,
            'metode_pembayaran' => 'Tunai',
            'status_pembayaran' => 'Dibayar',
        ]);

        CatatanProduk::create([
            'tgl_transaksi' => '2025-10-05',
            'nama_produk' => 'Stapler',
            'qty' => 1,
            'harga' => 25.00,
            'total' => 25.00,
            'metode_pembayaran' => 'Kad Debit',
            'status_pembayaran' => 'Belum Dibayar',
        ]);
    }
}
