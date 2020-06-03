<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{

  public function index(Request $request) {
    $result = Kategori::all();
    return view('kategori')->with('list_kategori', $result);
  }

  public function tambahPage(Request $request) {
    return view('pages.tambah_kategori');
  }

  public function tambah(Request $request) {
    $request->validate([
      'kategori' => 'required',
      'nama' => 'required',
      'deskripsi' => 'required'
    ]);
    $req = $request->all();
    Kategori::create($req);
    return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambah');
  }

  public function editPage($id) {
    $kategori = Kategori::find($id);
    return view('pages.edit_kategori')->with('kategori', $kategori);
  }

  public function update($id, Request $request) {
    $kategori = Kategori::find($id);

    if (empty($kategori)) {
      return redirect()->route('kategori')->with('error', 'Kategori tidak ditemukan');
    }

    $request->validate([
      'kategori' => 'required',
      'nama' => 'required',
      'deskripsi' => 'required'
    ]);

    $kategori->kategori = $request->get('kategori');
    $kategori->nama = $request->get('nama');
    $kategori->deskripsi = $request->get('deskripsi');
    $kategori->save();

    return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambah');
  }

  public function destroy($id) {
    $kategori = Kategori::find($id);

    if (empty($kategori)) {
      return redirect()->route('kategori')->with('error', 'Kategori tidak ditemukan');
    }

    $kategori->delete();
    return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
  }
}
