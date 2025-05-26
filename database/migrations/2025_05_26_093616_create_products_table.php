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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ukuran');         // XS, S, M, L, XL, dst
            $table->integer('harga');         // contoh: 27000
            $table->integer('panjang_baju');  // contoh: 62
            $table->integer('lebar_baju');    // contoh: 43
            $table->integer('panjang_lengan');// contoh: 19
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
