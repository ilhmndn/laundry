<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facedes\DB;


class Reception extends Model
{

    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'no_order';
    protected $dates = ['tgl_masuk', 'tgl_keluar'];
    public $table = 'receptions';
    protected $fillable = ['no_order','id_pel','nama_pel','tgl_masuk','tgl_keluar','t_bayar','bayar','sisa','kembalian','status','status_cucian'];

    public function Customer()
      {
        return $this->belongsTo('App\Customer', 'id_pel');
      }

    public function Types()
  {
    return $this->belongsToMany('App\Type','detail_receptions', 'no_order', 'kd_jenis')
    ->withPivot('kd_jenis','no_order','berat','jenis_cucian','harga');
  }

  public function Transactions()
{
  return $this->hasMany('App\Transaction','no_order', 'no_trans');
}
}
