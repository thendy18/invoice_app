@extends('layouts.app')

@section('content')
<div class="p-4">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Ukuran</label>
            <input type="text" name="ukuran" value="{{ $product->ukuran }}" required class="border p-2 w-full rounded">
        </div>
        <div>
            <label class="block font-medium">Harga</label>
            <input type="number" name="harga" value="{{ $product->harga }}" required class="border p-2 w-full rounded">
        </div>
        <div>
            <label class="block font-medium">Panjang Baju</label>
            <input type="number" name="panjang_baju" value="{{ $product->panjang_baju }}" required class="border p-2 w-full rounded">
        </div>
        <div>
            <label class="block font-medium">Lebar Baju</label>
            <input type="number" name="lebar_baju" value="{{ $product->lebar_baju }}" required class="border p-2 w-full rounded">
        </div>
        <div>
            <label class="block font-medium">Panjang Lengan</label>
            <input type="number" name="panjang_lengan" value="{{ $product->panjang_lengan }}" required class="border p-2 w-full rounded">
        </div>
        <div>
            <label class="block font-medium">Kategori</label>
            <select name="kategori" class="border p-2 w-full rounded" required>
                <option value="Cotton Combed 30s" {{ $product->kategori == 'Cotton Combed 30s' ? 'selected' : '' }}>Cotton Combed 30s</option>
                <option value="Cotton Combed 24s" {{ $product->kategori == 'Cotton Combed 24s' ? 'selected' : '' }}>Cotton Combed 24s</option>
            </select>
        </div>

        <button type="submit" class="bg-yellow-500 text-BLACK px-4 py-2 rounded hover:bg-yellow-600">Update</button>
    </form>
</div>
@endsection
