<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index(){
		$customers = Customer::all();
    	return view('customer.pelanggan', ['customers' => $customers]);
	}


  public function create()
  {
    	return view('customer.create');
      return redirect('/customer');
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
           'nama_pel' => 'required|unique:customers|max:20',
           'alamat' => 'required',
           'telp' => 'required|digits_between:5,12|numeric'
       ]);

    $customer = new Customer;
        $customer-> nama_pel       = $request->nama_pel;
        $customer -> alamat        = $request->alamat;
        $customer -> telp          = $request->telp;
        $customer->save();
  return redirect('/customer')->with('success','Pelanggan berhasil dibuat!');

  }


  public function show($id_pel)
    {
      $customer = Customer::find($id_pel);

    if(!$customer)
    abort(404);

    return view('customer/single', ['customer' => $customer]);
    }

    public function edit($id_pel)
    {
      $customer = Customer::find($id_pel);
      if(!$customer)
      abort(404);

      return view('customer/edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id_pel)
    {
      $validatedData = $request->validate([
             'nama_pel' => 'required|max:20',
             'alamat' => 'required',
             'telp' => 'required|digits_between:5,12|numeric'
         ]);
    $customer = Customer::find($id_pel);
    $customer->nama_pel       = $request->nama_pel;
    $customer->alamat         = $request->alamat;
    $customer->telp           = $request->telp;
    $customer->save();
    return redirect('/customer')->with('success','Data Pelanggan berhasil dirubah!');
    }



  public function destroy($id_pel)
  {
    $customer = Customer::find($id_pel);
    $customer->delete();
  return redirect('/customer')->with('success','Pelanggan berhasil dihapus!');
  }


}
