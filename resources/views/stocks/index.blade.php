@extends('layouts.app')

@section('content')
    <div class="p-6 bg-gray-100 min-h-screen">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">🧵 Stok Bahan Kaos</h2>

        {{-- Tombol kembali dan tambah stok --}}
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('invoices.index') }}" 
               class="bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-400">
                ← Kembali ke Daftar Invoice
            </a>

            <a href="{{ route('stocks.create') }}" 
               class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">
                + Tambah Stok
            </a>
        </div>

        {{-- Tabel --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="px-4 py-3">Nama Bahan</th>
                        <th class="px-4 py-3">Warna</th>
                        <th class="px-4 py-3">Ukuran</th>
                        <th class="px-4 py-3">Jumlah Stok</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-700">
                    @forelse($stocks as $stock)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $stock->nama_bahan }}</td>
                            <td class="px-4 py-2">{{ $stock->warna }}</td>
                            <td class="px-4 py-2">{{ $stock->ukuran }}</td>
                            <td class="px-4 py-2">{{ $stock->jumlah_stok }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('stocks.edit', $stock->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" class="inline" 
                                      onsubmit="return confirm('Yakin ingin menghapus stok ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:underline" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center px-4 py-4 text-gray-500">Belum ada data stok</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
