<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_order',
        'produk_id',
        'nama_produk',
        'jumlah',
        'ongkir',
        'keterangan',
        'jasa_kurir',
        'total_harga',
        'pengirim',
        'telp_pengirim',
        'penerima',
        'telp_penerima',
        'kota_tujuan',
        'alamat_tujuan',
        'label_pengiriman',
        'bukti_pembayaran',
        'status_pembayaran',
        'dropshipper_id',
        'toko_id',
        'no_resi',
    ];

    public function product()
    {
        return $this->belongsTo(Produk::class);
    }

    public function dropshipper()
    {
        return $this->belongsTo(Dropshipper::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
