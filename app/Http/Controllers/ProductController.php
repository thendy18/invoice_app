<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products30s = Product::where('kategori', 'Cotton Combed 30s')->get();
    $products24s = Product::where('kategori', 'Cotton Combed 24s')->get();

    return view('products.index', compact('products30s', 'products24s'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ukuran' => 'required|string',
            'harga' => 'required|integer',
            'panjang_baju' => 'required|integer',
            'lebar_baju' => 'required|integer',
            'panjang_lengan' => 'required|integer',
            'kategori' => 'required|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ukuran' => 'required|string',
            'harga' => 'required|integer',
            'panjang_baju' => 'required|integer',
            'lebar_baju' => 'required|integer',
            'panjang_lengan' => 'required|integer',
            'kategori' => 'required|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
