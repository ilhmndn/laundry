<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Reception;
use App\Customer;
use App\Type;
use Illuminate\Http\Request;
use App\Transformers\CustomerTransformer;
use App\Transformers\TypeTransformer;
use ConsoleTVs\Invoices\Classes\Invoice;

class ReceptionController extends Controller
{

  public function index(){
		$receptions = Reception::all();
    	return view('reception.penerimaan', ['receptions' => $receptions]);
	}

  public function create()
  {
      return view('reception.create');
  }

public function autocomplete(Request $request)
{

    $data = Customer::where("nama_pel","LIKE","%{$request->input('query')}%")->get();

  fractal()
    ->collection($data);
    $data = fractal($data, new CustomerTransformer())->toArray();
    return response()->json($data["data"]);
  }

  public function autocomplete2(Request $request)
  {

      $data2 = Type::where("jenis_cucian","LIKE","%{$request->input('query')}%")->get();

    fractal()
      ->collection($data2);
      $data2 = fractal($data2, new TypeTransformer())->toArray();
      return response()->json($data2["data"]);
    }

  public function store(Request $request)
{
  $validatedData = $request->validate([
         'no_order' => 'required|unique:receptions|max:10',
         'id_pel' => 'required',
         'nama_pel' => 'required|',
         // 'tgl_masuk' => 'date_format:d/m/Y',
         // 'tgl_keluar' => 'date_format:d/m/Y|after:tgl_masuk',
         't_bayar' => 'required|digits_between:4,12|numeric',
         'bayar' => 'required|digits_between:4,12|numeric',
        'kembalian' => 'required',
         'sisa' => 'required|digits_between:0,12|numeric',
         'status' => 'required|max:30',
         'status_cucian' => 'required|max:30',
     ]);



  $receptions = new Reception($request->all());
      $receptions -> no_order        = $request->no_order;
      $receptions -> id_pel          = $request->id_pel;
      $receptions -> nama_pel        = $request->nama_pel;
      $receptions -> tgl_masuk       = $request->tgl_masuk;

      $receptions -> tgl_keluar      = $request->tgl_keluar;
      $receptions -> t_bayar         = $request->t_bayar;
      $receptions -> bayar           = $request->bayar;
      $receptions -> kembalian       = $request->kembalian;
      $receptions -> sisa            = $request->sisa;
      $receptions -> status          = $request->status;
      $receptions -> status_cucian   = $request->status_cucian;

      $receptions ->save();

      $receptions->types()->attach($request->kd_jenis,['jenis_cucian' => $request->jenis_cucian, 'harga' => $request->harga, 'berat' => $request->berat,'keterangan' => $request->keterangan ]);

        return redirect('/reception')->with('success','Cucian berhasil ditambahkan!');
        }

  public function show($no_order)
    {
      $receptions = Reception::find($no_order);

    if(!$receptions)
    abort(404);

    return view('reception.single', ['reception' => $receptions]);
    }

    public function edit($no_order)
    {

      if(  $receptions = DB::table('receptions')
                        ->where('no_order',$no_order)
                        ->where('status_cucian','=','Cucian Selesai')
                        ->first())
      {
      return redirect('/reception')->with('success','Mohon maaf tidak bisa diubah, cucian sudah selesai!');
     }
   elseif( $receptions = DB::table('receptions')
                     ->where('no_order',$no_order)
                     ->where('status_cucian','=','Dalam Proses Pengerjaan')
                     ->first())
    {
       $receptions = Reception::find($no_order);
        return view('reception.edit', ['reception' => $receptions]);
     }


    }

    public function update(Request $request, $no_order)
    {
      $validatedData = $request->validate([
             'no_order' => 'required',
             'id_pel' => 'required',
             'nama_pel' => 'required|',
             // 'tgl_masuk' => 'date_format:d/m/Y',

             't_bayar' => 'required|digits_between:4,12|numeric',
             'bayar' => 'required|digits_between:4,12|numeric',
             'kembalian' => 'required',
             'sisa' => 'required|digits_between:0,12|numeric',
             'status' => 'required|max:30',
             'status_cucian' => 'required|max:30',
         ]);

    $receptions = Reception::find($no_order);
    $receptions -> no_order        = $request->no_order;
    $receptions -> id_pel          = $request->id_pel;
    $receptions -> nama_pel        = $request->nama_pel;
    $receptions -> tgl_masuk       = $request->tgl_masuk;
    $receptions -> tgl_keluar      = $request->tgl_keluar;
    $receptions -> t_bayar         = $request->t_bayar;
    $receptions -> bayar           = $request->bayar;
      $receptions -> kembalian       = $request->kembalian;
    $receptions -> sisa            = $request->sisa;
    $receptions -> status          = $request->status;
    $receptions -> status_cucian   = $request->status_cucian;

    $receptions->save();

    $receptions->types()->attach($request->kd_jenis,['harga' => $request->harga]);

    return redirect('/reception')->with('success','Data Cucian Masuk berhasil dirubah!');


    }

    public function destroy($no_order)
    {
      $receptions = Reception::find($no_order);
      $receptions->delete();

      $receptions->types()->detach($no_order);


        return redirect('/reception')->with('success','Data Jenis Cucian berhasil dihapus!');


    }





}
