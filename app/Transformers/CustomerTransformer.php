<?php

namespace App\Transformers;
use App\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{

  public function transform(Customer $customer)
  {
    return[
      'name'         =>$customer->nama_pel,
      'idp'         =>$customer->id_pel,
    ];
  }
}
