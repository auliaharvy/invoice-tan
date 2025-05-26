<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clients::create(
            [
                'nama' => 'PT Maju Mundur',
                'alamat' => 'Jl. Kebon Jeruk',
                'no_hp' => '081234567890',
                'email' => 'maju@mundur.kena',
            ]
        );
    }
}
