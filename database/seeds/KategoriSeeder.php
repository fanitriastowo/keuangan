<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Kategori::create([
        'kategori' => 'Pemasukan',
        'nama' => 'Gaji',
        'deskripsi' => 'Penggajian karyawan'
      ]);
      Kategori::create([
        'kategori' => 'Pemasukan',
        'nama' => 'Tunjangan',
        'deskripsi' => 'Tunjangan jabatan'
      ]);
      Kategori::create([
        'kategori' => 'Pemasukan',
        'nama' => 'Bonus',
        'deskripsi' => 'Bonus akhir tahun'
      ]);
      Kategori::create([
        'kategori' => 'Pemasukan',
        'nama' => 'THR',
        'deskripsi' => 'Tunjangan Hari Raya'
      ]);
      Kategori::create([
        'kategori' => 'Pengeluaran',
        'nama' => 'Sewa Kos',
        'deskripsi' => 'Sewa Kos'
      ]);
      Kategori::create([
        'kategori' => 'Pengeluaran',
        'nama' => 'Konsumsi',
        'deskripsi' => 'Biaya konsumsi bulanan'
      ]);
      Kategori::create([
        'kategori' => 'Pengeluaran',
        'nama' => 'Pakaian',
        'deskripsi' => 'Biaya loundry'
      ]);
      Kategori::create([
        'kategori' => 'Pengeluaran',
        'nama' => 'Nonton Bioskop',
        'deskripsi' => 'Biaya Hiburan'
      ]);
    }
}
