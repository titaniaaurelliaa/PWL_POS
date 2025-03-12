<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_supplier = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Supplier Satu',
                'supplier_alamat' => 'Jl. Supplier Satu No. 1'
            ],

            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Supplier Dua',
                'supplier_alamat' => 'Jl. Supplier Dua No. 2'
            ],

            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Supplier Tiga',
                'supplier_alamat' => 'Jl. Supplier Tiga No. 3'
            ],
        ];

        DB::table('m_supplier')->insert($data_supplier);
    }
}