<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanProduk extends Model
{
    protected $fillable = [
        'id_transaksi',
        'tgl_transaksi',
        'nama_produk',
        'qty',
        'harga',
        'total',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_transaksi)) {
                $model->id_transaksi = 'TRX' . now()->format('ymdH') . mt_rand(100, 999);
            }
        });
    }
}
