<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{

    protected $primaryKey = 'id_pel';

    public $table = 'customers';
    protected $fillable = ['id_pel','nama_pel','alamat', 'telp'];

    public function Receptions()
  {
    return $this->hasMany('App\Reception','id_pel', 'no_order');
  }
}
