<?php

namespace App\Http\Controllers;
use App\Models\invoices;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() {
        $data = invoices::with('client', 'user', 'items')->get();
        return json_decode($data);
    }

    public function add() {
        return view('invoice.add');
    }
}
