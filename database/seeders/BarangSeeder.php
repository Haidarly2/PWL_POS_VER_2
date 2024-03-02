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
        //
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'KTG001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 7000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'KTG002', 'barang_nama' => 'Kamera', 'harga_beli' => 1000000, 'harga_jual' => 150000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'KTG003', 'barang_nama' => 'Kemeja', 'harga_beli' => 120000, 'harga_jual' => 130000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'KTG004', 'barang_nama' => 'Kaos', 'harga_beli' => 100000, 'harga_jual' => 120000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'KTG005', 'barang_nama' => 'Celana Pendek', 'harga_beli' => 90000, 'harga_jual' => 110000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'KTG006', 'barang_nama' => 'Celana Panjang', 'harga_beli' => 110000, 'harga_jual' => 130000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'KTG007', 'barang_nama' => 'Jetz', 'harga_beli' => 5000, 'harga_jual' => 7500],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'KTG008', 'barang_nama' => 'Chitato', 'harga_beli' => 11000, 'harga_jual' => 15000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'KTG009', 'barang_nama' => 'Cimory Yogurt', 'harga_beli' => 9000, 'harga_jual' => 10000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'KTG010', 'barang_nama' => 'fresh tea', 'harga_beli' => 3000, 'harga_jual' => 3500],
        ];
        DB::table('m_barang')->insert($data);
    }
}
