<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facedes\DB;


class Transaction extends Model
{

    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'no_trans';
      protected $dates = ['tgl_trans'];
    public $table = 'transactions';
    protected $fillable = ['id_trans','no_order','tgl_trans','dibayar','kembalian'];

    public function Reception()
      {
        return $this->belongsTo('App\Reception', 'no_order');
      }

}
