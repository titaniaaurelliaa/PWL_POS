<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'EG',
                'kategori_nama' => 'Elektronik & Gadgets'
            ],

            [
                'kategori_id' => 2,
                'kategori_kode' => 'MM',
                'kategori_nama' => 'Makanan & Minuman'
            ],

            [
                'kategori_id' => 3,
                'kategori_kode' => 'PRT',
                'kategori_nama' => 'Perlengkapan Rumah Tangga'
            ],

            [
                'kategori_id' => 4,
                'kategori_kode' => 'PA',
                'kategori_nama' => 'Pakaian & Aksesoris'
            ],

            [
                'kategori_id' => 5,
                'kategori_kode' => 'AP',
                'kategori_nama' => 'Alat Pertanian'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}