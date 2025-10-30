<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catatan_produks', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->date('tgl_transaksi');
            $table->string('nama_produk');
            $table->integer('qty');
            $table->decimal('harga', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_produks');
    }
};
