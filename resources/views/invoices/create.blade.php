<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Buat Invoice Baru</h2>
    </x-slot>

    <div class="p-4">
        <form action="{{ route('invoices.store') }}" method="POST">
            @csrf

            <div class="mb-2">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Nama Pembeli</label>
                <input type="text" name="nama_pembeli" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Bahan Kaos</label>
                <input type="text" name="bahan_kaos" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Warna</label>
                <input type="text" name="warna" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Ukuran Kaos</label>
                <input type="text" name="ukuran_kaos" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Ukuran Sablon</label>
                <input type="text" name="ukuran_sablon" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Harga Kaos</label>
                <input type="number" step="0.01" name="harga_kaos" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Harga Sablon</label>
                <input type="number" step="0.01" name="harga_sablon" class="border rounded w-full" required>
            </div>

            <div class="mb-2">
                <label>Kuantiti</label>
                <input type="number" name="kuantiti" class="border rounded w-full" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Invoice</button>
            </div>
        </form>
    </div>
</x-app-layout>
