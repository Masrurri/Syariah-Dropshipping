<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropshipper extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'user_id',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaksi::class);
    }
}
