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
    Schema::create('invoices', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('tanggal');
        $table->string('nama_pembeli');
        $table->string('bahan_kaos');
        $table->string('warna');
        $table->string('ukuran_kaos');
        $table->string('ukuran_sablon');
        $table->decimal('harga_kaos', 10, 2);
        $table->decimal('harga_sablon', 10, 2);
        $table->integer('kuantiti');
        $table->decimal('total_harga', 12, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
