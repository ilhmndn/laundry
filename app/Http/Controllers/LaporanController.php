<?php

namespace App\Http\Controllers;
use Session;
use App\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Http\Requests;


class LaporanController extends Controller
{
  public function index(){
    $transactions = Transaction::all();
      return view('report.laporan', ['transactions' => $transactions]);
}
public function fun_pdf(Request $request)
  {

     if($request->tanggal_mulai && $request->tanggal_akhir){
       $transactions= Transaction::whereBetween('tgl_trans', [$request->tanggal_mulai, $request->tanggal_akhir])->get();
     }else{
             $transactions = Transaction::all();
     }


 $pdf = PDF::loadView('report.printable', ['transactions' => $transactions]);
   return $pdf->download('laporan.pdf');
}
}
