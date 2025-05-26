<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required|string',
            'warna' => 'required|string',
            'ukuran' => 'required|string',
            'jumlah_stok' => 'required|integer',
        ]);

        Stock::create($validated);

        return redirect()->route('stocks.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required|string',
            'warna' => 'required|string',
            'ukuran' => 'required|string',
            'jumlah_stok' => 'required|integer',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($validated);

        return redirect()->route('stocks.index')->with('success', 'Stok berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Stok berhasil dihapus.');
    }
}
