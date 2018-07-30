<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getrootController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function goToroot(){
    return view('auth.login');
  }
}
