<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
  protected $table = 'tabungans';
  protected $primaryKey = 'id';
  public $fillable = [
    'saldo'
  ];
}
