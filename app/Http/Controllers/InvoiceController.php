<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::where('user_id', Auth::id())->latest()->get();

        return view('invoices.index', compact('invoices'));
    }


    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('invoices.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'nama_pembeli' => 'required|string',
            'bahan_kaos' => 'required|string',
            'warna' => 'required|string',
            'ukuran_kaos' => 'required|string',
            'ukuran_sablon' => 'required|string',
            'harga_kaos' => 'required|numeric',
            'harga_sablon' => 'required|numeric',
            'kuantiti' => 'required|integer',
    ]);

        $data['user_id'] = Auth::id();
        $data['total_harga'] = ($data['harga_kaos'] + $data['harga_sablon']) * $data['kuantiti'];

        Invoice::create($data);

        return redirect()->route('invoices.index')->with('success', 'Invoice berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit($id)
        {
            $invoice = Invoice::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
            return view('invoices.edit', compact('invoice'));
        }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $data = $request->validate([
            'tanggal' => 'required|date',
            'nama_pembeli' => 'required|string',
            'bahan_kaos' => 'required|string',
            'warna' => 'required|string',
            'ukuran_kaos' => 'required|string',
            'ukuran_sablon' => 'required|string',
            'harga_kaos' => 'required|numeric',
            'harga_sablon' => 'required|numeric',
            'kuantiti' => 'required|integer',
        ]);

        $data['total_harga'] = ($data['harga_kaos'] + $data['harga_sablon']) * $data['kuantiti'];

        $invoice->update($data);

        return redirect()->route('invoices.index')->with('success', 'Invoice berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     */
       public function destroy($id)
        {
        $invoice = Invoice::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $invoice->delete();

        return redirect()->route('invoices.index')->with('success', 'Invoice berhasil dihapus.');
        }

   
    public function download($id)
    {
        $invoice = Invoice::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $pdf = Pdf::loadView('invoices.pdf', compact('invoice'));

        return $pdf->download('invoice-'.$invoice->id.'.pdf');
    }

     


}

