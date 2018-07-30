<?php

namespace App\Transformers;
use App\Reception;
use League\Fractal\TransformerAbstract;

class ReceptionTransformer extends TransformerAbstract
{

  public function transform(Reception $reception)
  {
    return[
      'name'         =>$reception->nama_pel,
      'nord'         =>$reception->no_order,
      'totb'         =>$reception->t_bayar,
      'byr'          =>$reception->bayar,
      'stts'         =>$reception->status,
      'sttsc'         =>$reception->status_cucian,
      'ssa'          =>$reception->sisa,
    ];
  }
}
