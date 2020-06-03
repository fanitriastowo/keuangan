<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $table = 'transaksi';
  protected $primaryKey = 'id';
  public $fillable = [
    'kategori_id',
    'nama',
    'deskripsi',
    'nominal'
  ];

  public function kategori()
  {
    return $this->belongsTo('App\Kategori');
  }
}
