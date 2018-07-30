<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use PDF;

class pdfController extends Controller
{
    public function index()
    {
      $transactions = Transaction::all();
      $pdf = PDF::loadView('pdf', compact('transactions'));
      return $pdf->download('laporan.pdf');
    }
}
