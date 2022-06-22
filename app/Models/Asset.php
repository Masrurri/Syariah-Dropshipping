<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'url',
    ];

    public function product()
    {
        return $this->belongsTo(Produk::class);
    }
}
