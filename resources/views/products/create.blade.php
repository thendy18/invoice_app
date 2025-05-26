@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Produk Baru</h2>

        <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="ukuran" class="block font-medium">Ukuran</label>
                <input type="text" name="ukuran" id="ukuran" required class="border p-2 w-full rounded">
            </div>
            <div>
                <label for="harga" class="block font-medium">Harga</label>
                <input type="number" name="harga" id="harga" required class="border p-2 w-full rounded">
            </div>
            <div>
                <label for="panjang_baju" class="block font-medium">Panjang Baju</label>
                <input type="number" name="panjang_baju" id="panjang_baju" required class="border p-2 w-full rounded">
            </div>
            <div>
                <label for="lebar_baju" class="block font-medium">Lebar Baju</label>
                <input type="number" name="lebar_baju" id="lebar_baju" required class="border p-2 w-full rounded">
            </div>
            <div>
                <label for="panjang_lengan" class="block font-medium">Panjang Lengan</label>
                <input type="number" name="panjang_lengan" id="panjang_lengan" required class="border p-2 w-full rounded">
            </div>
            <div>


            <label for="kategori" class="block font-medium">Kategori</label>
            <select name="kategori" id="kategori" required class="border p-2 w-full rounded">
                <option value="Cotton Combed 30s">Cotton Combed 30s</option>
                <option value="Cotton Combed 24s">Cotton Combed 24s</option>
            </select>
        </div>

            <button type="submit" class="bg-green-500 text-black px-4 py-2 rounded hover:bg-green-600">
                Simpan Produk
            </button>
        </form>
    </div>
@endsection
