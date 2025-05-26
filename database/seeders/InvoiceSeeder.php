<?php

namespace Database\Seeders;

use App\Models\invoices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoices::create(
            [
                'no_invoice' => 'INV-001',
                'id_client' => '1',
                'id_user' => '1',
                'total_harga' => '100000',
                'status' => 'belum terbayar',
            ]
        );
    }
}
