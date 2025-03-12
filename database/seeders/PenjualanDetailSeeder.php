<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_penjualan = [];
        $penjualan_id = 1;
        $detail_id = 1;

        for ($i = 1; $i <= 30; $i++) {
            $barang_id = rand(1, 15);
            $jumlah = rand(1, 10);

            $harga = DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual');

            $detail_penjualan[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $penjualan_id,
                'barang_id' => $barang_id,
                'harga' => $harga,
                'jumlah' => $jumlah
            ];

            if ($i % 3 == 0) {
                $penjualan_id++;
            }
        }

        DB::table('t_penjualan_detail')->insert($detail_penjualan);
    }
}