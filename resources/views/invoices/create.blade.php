<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buat Invoice Baru</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }

        input, label, button {
            display: block;
            margin-bottom: 1rem;
            width: 100%;
        }

        input {
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 0.7rem;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Buat Invoice Baru</h2>

        <form action="{{ route('invoices.store') }}" method="POST">
            @csrf

            <label>Tanggal</label>
            <input type="date" name="tanggal" required>

            <label>Nama Pembeli</label>
            <input type="text" name="nama_pembeli" required>

            <label>Bahan</label>
            <input type="text" name="bahan_kaos" required>

            <label>Warna</label>
            <input type="text" name="warna" required>

            <label>Ukuran Kaos</label>
            <input type="text" name="ukuran_kaos" required>

            <label>Ukuran Sablon</label>
            <input type="text" name="ukuran_sablon" required>

            <label>Harga Kaos</label>
            <input type="number" name="harga_kaos" step="100" required>

            <label>Harga Sablon</label>
            <input type="number" name="harga_sablon" step="100" required>

            <label>Qty</label>
            <input type="number" name="kuantiti" required>

            <button type="submit">Simpan Invoice</button>
        </form>
    </div>
</body>
</html>
