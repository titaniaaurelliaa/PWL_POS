<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_penjualan = [
            // Penjualan oleh user 3 (Staff/Kasir)
            [
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Cici',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Dodi',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Eka',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Penjualan oleh user 2 (Manager)
            [
                'user_id' => 2,
                'pembeli' => 'Fani',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Gita',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Hani',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Penjualan oleh user 1 (Admin)
            [
                'user_id' => 1,
                'pembeli' => 'Indra',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data_penjualan);
    }
}