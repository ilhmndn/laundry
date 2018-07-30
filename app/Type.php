<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{

    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'kd_jenis';
    public $table = 'types';
    protected $fillable = ['kd_jenis','jenis_cucian','harga'];

    public function Receptions()
    {
      return $this->belongsToMany('App\Reception', 'Receptions', 'kd_jenis','no_order')
      ->withPivot('kd_jenis','no_order','berat','jenis_cucian','harga');
    }
    }
