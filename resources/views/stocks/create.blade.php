@extends('layouts.app')

@section('content')
<div class="p-4">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Stok Bahan</h2>

    <form action="{{ route('stocks.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium">Nama Bahan</label>
            <input type="text" name="nama_bahan" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Warna</label>
            <input type="text" name="warna" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Ukuran</label>
            <input type="text" name="ukuran" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Jumlah Stok</label>
            <input type="number" name="jumlah_stok" required class="w-full border p-2 rounded">
        </div>

        

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Simpan
        </button>
    </form>
</div>
@endsection
