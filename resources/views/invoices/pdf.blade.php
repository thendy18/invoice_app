<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice PDF</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Invoice - {{ $invoice->nama_pembeli }}</h2>
    <p>Tanggal: {{ $invoice->tanggal }}</p>

    <table>
        <tr><th>Bahan Kaos</th><td>{{ $invoice->bahan_kaos }}</td></tr>
        <tr><th>Warna</th><td>{{ $invoice->warna }}</td></tr>
        <tr><th>Ukuran Kaos</th><td>{{ $invoice->ukuran_kaos }}</td></tr>
        <tr><th>Ukuran Sablon</th><td>{{ $invoice->ukuran_sablon }}</td></tr>
        <tr><th>Harga Kaos</th><td>Rp{{ number_format($invoice->harga_kaos) }}</td></tr>
        <tr><th>Harga Sablon</th><td>Rp{{ number_format($invoice->harga_sablon) }}</td></tr>
        <tr><th>Kuantiti</th><td>{{ $invoice->kuantiti }}</td></tr>
        <tr><th>Total Harga</th><td><strong>Rp{{ number_format($invoice->total_harga) }}</strong></td></tr>
    </table>
</body>
</html>
