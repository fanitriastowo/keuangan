<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Kategori;
use App\Tabungan;

class TransaksiController extends Controller
{
  public function index(Request $request) {
    $result = Transaksi::with('kategori')->whereMonth('created_at', date('m'))->get();
    $saldo = Tabungan::first();
    if (empty($saldo)) {
      Tabungan::create(['saldo' => 0]);
    }
    return view('transaksi')->with('list_transaksi', $result)->with('saldo', $saldo->saldo);
  }

  public function tambahPage(Request $request) {
    $kategoris = Kategori::all();
    return view('pages.tambah_transaksi')->with('kategoris', $kategoris);
  }

  public function tambah(Request $request) {
    $request->validate([
      'kategori_id' => 'required',
      'nama' => 'required',
      'deskripsi' => 'required',
      'nominal' => 'required|numeric'
    ]);

    $kategori = Kategori::find($request->kategori_id);

    $tabungan = Tabungan::first();
    if (empty($tabungan)) {
      Tabungan::create(['saldo' => $request->nominal]);
    } else {
      if ($kategori->kategori === 'Pemasukan') {
        $tabungan->saldo += $request->nominal;
      } else {
        $tabungan->saldo -= $request->nominal;
      }
      $tabungan->save();
    }

    Transaksi::create($request->all());
    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil ditambah');
  }

  public function editPage($id) {
    $transaksi = Transaksi::find($id);
    $kategoris = Kategori::all();
    return view('pages.edit_transaksi')
      ->with('transaksi', $transaksi)
      ->with('kategoris', $kategoris);
  }

  public function update($id, Request $request) {
    $transaksi = Transaksi::find($id);

    if (empty($transaksi)) {
      return redirect()->route('transaksi')->with('error', 'Transaksi tidak ditemukan');
    }

    $request->validate([
      'kategori_id' => 'required',
      'nama' => 'required',
      'deskripsi' => 'required',
      'nominal' => 'required|numeric'
    ]);

    $transaksi->kategori_id = $request->get('kategori_id');
    $transaksi->nama = $request->get('nama');
    $transaksi->deskripsi = $request->get('deskripsi');
    $transaksi->nominal = $request->get('nominal');
    $transaksi->save();

    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil ditambah');
  }

  public function destroy($id) {
    $transaksi = Transaksi::find($id);

    if (empty($transaksi)) {
      return redirect()->route('transaksi')->with('error', 'Transaksi tidak ditemukan');
    }

    $transaksi->delete();
    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil dihapus');
  }

  public function filter(Request $request) {
    $awal = $request->awal;
    $akhir = $request->akhir;

    $result = Transaksi::with('kategori')->whereMonth('created_at', date('m'))->get();
    $saldo = Tabungan::first();
    if (empty($saldo)) {
      Tabungan::create(['saldo' => 0]);
    }
    return view('transaksi')->with('list_transaksi', $result)->with('saldo', $saldo->saldo);
  }
}
