<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Invoice</h2>
    </x-slot>

    <div class="p-4">
        <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="border rounded w-full" value="{{ $invoice->tanggal }}" required>
            </div>

            <div class="mb-2">
                <label>Nama Pembeli</label>
                <input type="text" name="nama_pembeli" class="border rounded w-full" value="{{ $invoice->nama_pembeli }}" required>
            </div>

            <div class="mb-2">
                <label>Bahan Kaos</label>
                <input type="text" name="bahan_kaos" class="border rounded w-full" value="{{ $invoice->bahan_kaos }}" required>
            </div>

            <div class="mb-2">
                <label>Warna</label>
                <input type="text" name="warna" class="border rounded w-full" value="{{ $invoice->warna }}" required>
            </div>

            <div class="mb-2">
                <label>Ukuran Kaos</label>
                <input type="text" name="ukuran_kaos" class="border rounded w-full" value="{{ $invoice->ukuran_kaos }}" required>
            </div>

            <div class="mb-2">
                <label>Ukuran Sablon</label>
                <input type="text" name="ukuran_sablon" class="border rounded w-full" value="{{ $invoice->ukuran_sablon }}" required>
            </div>

            <div class="mb-2">
                <label>Harga Kaos</label>
                <input type="number" name="harga_kaos" step="0.01" class="border rounded w-full" value="{{ $invoice->harga_kaos }}" required>
            </div>

            <div class="mb-2">
                <label>Harga Sablon</label>
                <input type="number" name="harga_sablon" step="0.01" class="border rounded w-full" value="{{ $invoice->harga_sablon }}" required>
            </div>

            <div class="mb-2">
                <label>Kuantiti</label>
                <input type="number" name="kuantiti" class="border rounded w-full" value="{{ $invoice->kuantiti }}" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update Invoice</button>
            </div>
        </form>
    </div>
</x-app-layout>
