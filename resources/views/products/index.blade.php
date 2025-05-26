@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Katalog Produk</h2>
        <a href="{{ route('invoices.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded mb-4 inline-block hover:bg-gray-400">
            ← Kembali ke Daftar Invoice
        </a>

        <a href="{{ route('products.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">
            + Tambah Produk
        </a>

        {{-- TABEL Cotton Combed 30s --}}
        <table class="w-full table-auto border border-black mb-12">
            <thead class="bg-gray-200">
                <tr>
                    <th colspan="6" class="text-center text-lg font-semibold py-2 border border-black">
                        Cotton Combed 30s
                    </th>
                </tr>
                <tr>
                    <th class="border border-black px-2 py-1">Ukuran</th>
                    <th class="border border-black px-2 py-1">Harga</th>
                    <th class="border border-black px-2 py-1">Panjang Baju</th>
                    <th class="border border-black px-2 py-1">Lebar Baju</th>
                    <th class="border border-black px-2 py-1">Panjang Lengan</th>
                    <th class="border border-black px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products30s as $product)
                    <tr>
                        <td class="border border-black px-2 py-1">{{ $product->ukuran }}</td>
                        <td class="border border-black px-2 py-1">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->panjang_baju }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->lebar_baju }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->panjang_lengan }}</td>
                        <td class="border border-black px-2 py-1 space-x-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline text-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center border border-black">Belum ada data produk</td></tr>
                @endforelse
            </tbody>
        </table>


        {{-- SPASI ANTAR TABEL --}}
        <div class="h-12"></div>

        {{-- TABEL Cotton Combed 24s --}}
        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th colspan="6" class="text-center text-lg font-semibold py-2 border border-black">
                        Cotton Combed 24s
                    </th>
                </tr>
                <tr>
                    <th class="border border-black px-2 py-1">Ukuran</th>
                    <th class="border border-black px-2 py-1">Harga</th>
                    <th class="border border-black px-2 py-1">Panjang Baju</th>
                    <th class="border border-black px-2 py-1">Lebar Baju</th>
                    <th class="border border-black px-2 py-1">Panjang Lengan</th>
                    <th class="border border-black px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products24s as $product)
                    <tr>
                        <td class="border border-black px-2 py-1">{{ $product->ukuran }}</td>
                        <td class="border border-black px-2 py-1">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->panjang_baju }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->lebar_baju }}</td>
                        <td class="border border-black px-2 py-1">{{ $product->panjang_lengan }}</td>
                        <td class="border border-black px-2 py-1 space-x-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline text-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center border">Belum ada data produk</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
