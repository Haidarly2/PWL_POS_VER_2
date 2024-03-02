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
        $data = [
            // ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 1, 'harga' => rand(3500, 7000000), 'jumlah' => rand(1, 5)],
            // ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 2, 'harga' => rand(3500, 7000000), 'jumlah' => rand(1, 5)],
            // ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 3, 'harga' => rand(3500, 7000000), 'jumlah' => rand(1, 5)],
        ];

        // Ambil data dari seeder PenjualanSeeder
        $penjualanData = DB::table('t_penjualan')->get()->toArray();

        // Ambil data dari seeder BarangSeeder
        $barangData = DB::table('m_barang')->get()->toArray();

        // Persiapan data detail penjualan
        foreach ($penjualanData as $penjualan) {
            // Ambil jumlah barang yang dijual dari seeder PenjualanSeeder
            $jumlahBarang = rand(1, 5); // Misalnya, kita acak jumlah barang antara 1 hingga 5

            for ($i = 0; $i < $jumlahBarang; $i++) {
                $barang = $barangData[array_rand($barangData)]; // Pilih barang secara acak dari data barang
                $data[] = [
                    'penjualan_id' => $penjualan->penjualan_id,
                    'barang_id' => $barang->barang_id,
                    'harga' => rand(3500, 7000000), // Misalnya, harga barang diacak antara 100.000 hingga 1.000.000
                    'jumlah' => rand(1, 5), // Misalnya, jumlah barang diacak antara 1 hingga 5
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}