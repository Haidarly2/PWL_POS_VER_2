<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'John Doe', 'penjualan_kode' => 'PJN001', 'penjualan_tanggal' => '2024-02-09 08:30:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Mary Doe', 'penjualan_kode' => 'PJN002', 'penjualan_tanggal' => '2024-02-10 08:30:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Jane Mary', 'penjualan_kode' => 'PJN003', 'penjualan_tanggal' => '2024-02-11 08:30:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Mary Jane', 'penjualan_kode' => 'PJN004', 'penjualan_tanggal' => '2024-02-12 08:30:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Stephen Hawk', 'penjualan_kode' => 'PJN005', 'penjualan_tanggal' => '2024-02-13 08:30:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Stephen Doe', 'penjualan_kode' => 'PJN006', 'penjualan_tanggal' => '2024-02-13 09:30:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'John Stephen', 'penjualan_kode' => 'PJN007', 'penjualan_tanggal' => '2024-02-21 08:30:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Jane Hawk', 'penjualan_kode' => 'PJN008', 'penjualan_tanggal' => '2024-02-21 10:30:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Hawk Doe', 'penjualan_kode' => 'PJN009', 'penjualan_tanggal' => '2024-03-01 08:30:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Stephen Mary', 'penjualan_kode' => 'PJN010', 'penjualan_tanggal' => Carbon::now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
