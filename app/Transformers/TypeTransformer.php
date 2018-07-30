<?php

namespace App\Transformers;
use App\Type;
use League\Fractal\TransformerAbstract;

class TypeTransformer extends TransformerAbstract
{

  public function transform(Type $type)
  {
    return[
      'name'        =>$type->jenis_cucian,
      'kdj'         =>$type->kd_jenis,
      'hrg'         =>$type->harga,
    ];
  }
}
