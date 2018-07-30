<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
  public function index(){
		$types = Type::all();
    	return view('type.tipe', ['types' => $types]);
	}


  public function create()
  {
    	return view('type.create');
      return redirect('/type');
  }
  //
  //
  public function show($kd_jenis)
    {
      $type = Type::find($kd_jenis);

    if(!$type)
    abort(404);

    return view('type/single', ['type' => $type]);
    }


    public function edit($kd_jenis)
    {
      $type = Type::find($kd_jenis);
      if(!$type)
      abort(404);

      return view('type/edit', ['type' => $type]);
    }

    public function update(Request $request, $kd_jenis)
    {
      $validatedData = $request->validate([
          
             'jenis_cucian' => 'required',
             'harga' => 'required|digits_between:4,12|numeric'
         ]);

    $type = Type::find($kd_jenis);
    $type -> kd_jenis       = $request->kd_jenis;
    $type -> jenis_cucian   = $request->jenis_cucian;
    $type -> harga          = $request->harga;
    $type->save();
    return redirect('/type')->with('success','Data Jenis Cucian berhasil dirubah!');


    }



  public function store(Request $request)
  {
    $validatedData = $request->validate([
           'kd_jenis' => 'required|unique:types|max:5',
           'jenis_cucian' => 'required',
           'harga' => 'required|digits_between:4,12|numeric'
       ]);

    $types = new Type;
        $types -> kd_jenis      = $request->kd_jenis;
        $types -> jenis_cucian  = $request->jenis_cucian;
        $types -> harga         = $request->harga;
        $types ->save();
          return redirect('/type')->with('success','Jenis Cucian berhasil dibuat!');

  }

  public function destroy($kd_jenis)
  {
    $type = Type::find($kd_jenis);
    $type->delete();
    return redirect('/type')->with('success','Jenis Cucian berhasil dihapus!');
  }

}
