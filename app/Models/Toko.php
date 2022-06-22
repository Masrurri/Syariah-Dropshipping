<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supplier()
    {
        return $this->hasOne(Supplier::class);
    }

    public function is_toko_complete()
    {
        if($this->kota == "" || $this->alamat == "" || $this->deskripsi == "" ||
            $this-> no_rekening == "" || $this->bank == "" || $this->kartu_identitas == "" ||
            $this->foto_identitas == "") {
                return false;
            }
        return true;
    }

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
