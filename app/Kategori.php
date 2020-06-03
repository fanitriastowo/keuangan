<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
  use SoftDeletes;
  protected $table = 'kategori';
  protected $primaryKey = 'id';
  public $fillable = [
    'kategori',
    'nama',
    'deskripsi',
  ];

  public function transaksis() {
    return $this->hasMany(Transaksi::class);
  }
}
