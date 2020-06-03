<?php

use Illuminate\Database\Seeder;
use App\Transaksi;
use App\Kategori;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kategori = Kategori::first();
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Gaji',
        'deskripsi' => 'Penggajian karyawan',
        'nominal' => 5000000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Tunjangan',
        'deskripsi' => 'Tunjangan jabatan',
        'nominal' => 1000000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Bonus',
        'deskripsi' => 'Bonus akhir tahun',
        'nominal' => 1000000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'THR',
        'deskripsi' => 'Tunjangan Hari Raya',
        'nominal' => 2000000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Sewa Kos',
        'deskripsi' => 'Sewa Kos',
        'nominal' => 500000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Konsumsi',
        'deskripsi' => 'Biaya konsumsi bulanan',
        'nominal' => 500000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Pakaian',
        'deskripsi' => 'Biaya loundry',
        'nominal' => 100000
      ]);
      Transaksi::create([
        'kategori_id' => $kategori->id,
        'nama' => 'Nonton Bioskop',
        'deskripsi' => 'Biaya Hiburan',
        'nominal' => 200000
      ]);
    }
}
