<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
    'ukuran', 'harga', 'panjang_baju', 'lebar_baju', 'panjang_lengan', 'kategori'
];


}
