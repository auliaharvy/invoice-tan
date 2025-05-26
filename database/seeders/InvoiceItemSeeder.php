<?php

namespace Database\Seeders;

use App\Models\invoices_items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        invoices_items::create([
            'id_invoice' => 1,
            'nama_barang' => 'Laptop',
            'jumlah' => 1,
            'harga_satuan' => 1000000,
            'total_harga' => 1000000,
        ]);
    }
}
