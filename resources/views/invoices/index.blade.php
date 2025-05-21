<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Daftar Invoice</h2>
    </x-slot>

    <div class="p-4">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('invoices.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded mb-4 inline-block">+ Buat Invoice</a>

        <table class="w-full table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-2 py-1">Tanggal</th>
                    <th class="border px-2 py-1">Nama Pembeli</th>
                    <th class="border px-2 py-1">Bahan</th>
                    <th class="border px-2 py-1">Warna</th>
                    <th class="border px-2 py-1">Ukuran Kaos</th>
                    <th class="border px-2 py-1">Ukuran Sablon</th>
                    <th class="border px-2 py-1">Harga Kaos</th>
                    <th class="border px-2 py-1">Harga Sablon</th>
                    <th class="border px-2 py-1">Qty</th>
                    <th class="border px-2 py-1">Total Harga</th>
                    <th class="border px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($invoices as $invoice)
                    <tr>
                        <td class="border px-2 py-1">{{ $invoice->tanggal }}</td>
                        <td class="border px-2 py-1">{{ $invoice->nama_pembeli }}</td>
                        <td class="border px-2 py-1">{{ $invoice->bahan_kaos }}</td>
                        <td class="border px-2 py-1">{{ $invoice->warna }}</td>
                        <td class="border px-2 py-1">{{ $invoice->ukuran_kaos }}</td>
                        <td class="border px-2 py-1">{{ $invoice->ukuran_sablon }}</td>
                        <td class="border px-2 py-1">Rp{{ number_format($invoice->harga_kaos, 0, ',', '.') }}</td>
                        <td class="border px-2 py-1">Rp{{ number_format($invoice->harga_sablon, 0, ',', '.') }}</td>
                        <td class="border px-2 py-1">{{ $invoice->kuantiti }}</td>
                        <td class="border px-2 py-1 font-semibold">Rp{{ number_format($invoice->total_harga, 0, ',', '.') }}</td>
                        <td class="border px-2 py-1">
                        <a href="{{ route('invoices.download', $invoice->id) }}" class="text-blue-500 underline text-sm">Download PDF</a><br>

                        <a href="{{ route('invoices.edit', $invoice->id) }}" class="text-yellow-500 underline text-sm">Edit</a>

                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus invoice ini?')" class="mt-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 underline text-sm">Hapus</button>
                        </form>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="border px-2 py-2 text-center">Belum ada invoice</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
