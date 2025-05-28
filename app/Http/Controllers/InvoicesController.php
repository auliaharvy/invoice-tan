<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoices;
use App\Models\clients;
use App\Models\User;
use App\Models\invoices_items;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Invoices';
        $listData = invoices::with('client', 'user')->get();

        return view('invoices.index', compact('listData', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Invoice';
        $clients = clients::all(); // Mengambil data client untuk dropdown
        $users = User::all(); // Mengambil data user untuk dropdown
        return view('invoices.create', compact('title', 'clients', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

       $invoice = invoices::create([
            'no_invoice' => $request->input('no_invoice'),
            'id_client' => $request->input('id_client'),
            'id_user' => $request->input('id_user'),
            'total_harga' => $request->input('total_harga'),
            'status' => $request->input('status'),
        ]);

        // Create invoice items from the request arrays
        for ($i = 0; $i < count($request->nama_barang); $i++) {
            invoices_items::create([
                'id_invoice' => $invoice->id,
                'nama_barang' => $request->nama_barang[$i],
                'jumlah' => $request->jumlah[$i],
                'harga_satuan' => $request->harga_satuan[$i],
                'total_harga' => $request->total_harga[$i]
            ]);
        }

        return redirect()->route('invoices.index')->with('success', 'Invoice berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Invoice';
        $data = invoices::with('client', 'user', 'items')->find($id);

        return view('invoices.show', compact('data', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
