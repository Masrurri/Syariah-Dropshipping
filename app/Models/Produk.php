<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'saran_harga',
        'stok',
        'berat',
        'deskripsi',
        'gambar_utama',
        'toko_id',
        'category_id',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaksi::class);
    }
}
