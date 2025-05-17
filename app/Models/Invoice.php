<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal',
        'nama_pembeli',
        'bahan_kaos',
        'warna',
        'ukuran_kaos',
        'ukuran_sablon',
        'harga_kaos',
        'harga_sablon',
        'kuantiti',
        'total_harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

