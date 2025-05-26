@extends('layouts.app')

@section('content')
<div class="p-4">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Stok Bahan</h2>

    <form action="{{ route('stocks.update', $stock->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Nama Bahan</label>
            <input type="text" name="nama_bahan" value="{{ $stock->nama_bahan }}" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Warna</label>
            <input type="text" name="warna" value="{{ $stock->warna }}" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Ukuran</label>
            <input type="text" name="ukuran" value="{{ $stock->ukuran }}" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Jumlah Stok</label>
            <input type="number" name="jumlah_stok" value="{{ $stock->jumlah_stok }}" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block font-medium">Keterangan (opsional)</label>
            <textarea name="keterangan" class="w-full border p-2 rounded">{{ $stock->keterangan }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Update
        </button>
    </form>
</div>
@endsection
