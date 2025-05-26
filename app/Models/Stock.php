<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'nama_bahan', 'warna', 'ukuran', 'jumlah_stok', 'keterangan'
    ];

}
