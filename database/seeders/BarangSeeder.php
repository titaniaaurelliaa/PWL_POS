<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_barang = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'EG001',
                'barang_nama' => 'Smartphone X',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'EG002',
                'barang_nama' => 'Laptop Y',
                'harga_beli' => 8000000,
                'harga_jual' => 10000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'EG003',
                'barang_nama' => 'Smartwatch Z',
                'harga_beli' => 500000,
                'harga_jual' => 750000,
            ],

            // Barang untuk kategori Makanan & Minuman (kategori_id = 2)
            [
                'kategori_id' => 2,
                'barang_kode' => 'MM001',
                'barang_nama' => 'Snack A',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'MM002',
                'barang_nama' => 'Minuman B',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'MM003',
                'barang_nama' => 'Mie Instan C',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],

            // Barang untuk kategori Perlengkapan Rumah Tangga (kategori_id = 3)
            [
                'kategori_id' => 3,
                'barang_kode' => 'PRT001',
                'barang_nama' => 'Panci D',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PRT002',
                'barang_nama' => 'Wajan E',
                'harga_beli' => 120000,
                'harga_jual' => 180000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PRT003',
                'barang_nama' => 'Blender F',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],

            // Barang untuk kategori Pakaian & Aksesoris (kategori_id = 4)
            [
                'kategori_id' => 4,
                'barang_kode' => 'PA001',
                'barang_nama' => 'Kaos G',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'PA002',
                'barang_nama' => 'Celana H',
                'harga_beli' => 80000,
                'harga_jual' => 120000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'PA003',
                'barang_nama' => 'Topi I',
                'harga_beli' => 30000,
                'harga_jual' => 50000,
            ],

            // Barang untuk kategori Alat Pertanian (kategori_id = 5)
            [
                'kategori_id' => 5,
                'barang_kode' => 'AP001',
                'barang_nama' => 'Cangkul J',
                'harga_beli' => 70000,
                'harga_jual' => 100000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'AP002',
                'barang_nama' => 'Sabit K',
                'harga_beli' => 50000,
                'harga_jual' => 80000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'AP003',
                'barang_nama' => 'Sprayer L',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
        ];

        DB::table('m_barang')->insert($data_barang);
    }
}