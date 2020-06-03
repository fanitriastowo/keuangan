<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
use App\Transaksi;

class DashboardController extends Controller {

  public function index(Request $request) {
    $tabungan = Tabungan::first();
    if(empty($tabungan)) {
      Tabungan::create(['saldo' => 0]);
      return view('dashboard')->with('saldo', 0);
    }

    $pemasukan = 0;
    $pengeluaran = 0;
    $transaksi = Transaksi::all();
    if (!empty($transaksi)) {
      foreach ($transaksi as $trx) {
        if ($trx->kategori->kategori === 'Pengeluaran') {
          $pengeluaran += $trx->nominal;
        } else {
          $pemasukan += $trx->nominal;
        }
      }
    }

    return view('dashboard')
      ->with('saldo', $tabungan->saldo)
      ->with('pemasukan', $pemasukan)
      ->with('pengeluaran', $pengeluaran);
  }
}
