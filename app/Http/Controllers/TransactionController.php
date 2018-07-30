<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Transaction;
use App\Reception;
use App\Customer;
use App\Type;
use App\Transformers\ReceptionTransformer;
use Illuminate\Http\Request;
use ConsoleTVs\Invoices\Classes\Invoice;


class TransactionController extends Controller
{
  public function index(){
    $transactions = Transaction::all();
      return view('transaction.transaksi', ['transactions' => $transactions]);
  }

  public function create()
  {

      return view('transaction.create');
  }

  public function autocomplete3(Request $request)
  {

      $data3 = Reception::where("nama_pel","LIKE","%".$request->input('query')."%")->where("status_cucian","=","Dalam Proses Pengerjaan")->get();


    fractal()
      ->collection($data3);
      $data3 = fractal($data3, new ReceptionTransformer())->toArray();
      return response()->json($data3["data"]);
    }

    public function store(Request $request)
  {
    $validatedData = $request->validate([
           'no_trans' => 'required|unique:transactions|max:10',

           'dibayar' => 'required|digits_between:0,12|numeric',
           'kembalian' => 'required|digits_between:0,12|numeric',

       ]);


    $transactions = new Transaction;

        $transactions -> no_trans        = $request->no_trans;
        $transactions -> no_order        = $request->no_order;
        $transactions -> tgl_trans        = $request->tgl_trans;
        $transactions -> dibayar         = $request->dibayar;
        $transactions -> kembalian       = $request->kembalian;

        $transactions ->save();

        \DB::table('receptions')
            ->where('no_order', $transactions->no_order)
            ->update(array('status' => $request['status']));


        \DB::table('receptions')
            ->where('no_order', $transactions->no_order)
            ->update(array('status_cucian' => $request['status_cucian']));





          return redirect('/transaction')->with('success','Transaksi berhasil!');;
          }




    public function destroy($no_trans)
        {
          $transactions = Transaction::find($no_trans);
          $transactions->delete();

          return redirect('/transaction')->with('success','Transaksi berhasil dihapus!');

          }



          public function invoice($invo)
              {
                // $invoice = Invoice::make()->addItem('Test Item', 10.25, 2, 1412)->number(4021)->tax(21)->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')->customer(['name' => 'ss',])->download('demo');
                  $transaksi = Reception::get();
                  $transaksi=  Reception::with(['types'])->where('no_order',$invo)->get();

                $invoice = Invoice::make();

                foreach($transaksi as $recep){

                    $invoice->addItem($recep->no_order,
                    $recep->nama_pel,
                    $recep->tgl_masuk,
                     $recep->tgl_keluar,
                     $recep->t_bayar,
                     $recep->bayar,
                     $recep->sisa,
                     $recep->status,
                     $recep->customer->alamat,
                     $recep->customer->telp,
                    $recep->types[0]->pivot->jenis_cucian,
                    $recep->types[0]->pivot->harga,
                    $recep->types[0]->pivot->berat

                   );
// dd($recep);
                }

                $invoice->number($recep->no_order)
                ->notes('Pastikan membawa kembali nota ini saat mengambil pakaian. Terima Kasih')

                ->customer
                (['id' => $recep->id_pel,
                  'name' => $recep->nama_pel,

              ])

                ->download($recep->nama_pel);
                }

}
