<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\KategoriProduk;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProduk::create(['nama_kategori' => 'Buku']);
        KategoriProduk::create(['nama_kategori' => 'Alat Tulis']);
        KategoriProduk::create(['nama_kategori' => 'Kertas']);
        KategoriProduk::create(['nama_kategori' => 'Peralatan Kantor']);
        KategoriProduk::create(['nama_kategori' => 'Lain-lain']);
    }
}
