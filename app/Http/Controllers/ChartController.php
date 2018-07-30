<?php

namespace App\Http\Controllers;

use App\Charts\pelangganChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ChartController extends Controller
{
/**
* Show a sample chart.
*
* @return Response
*/

  public function chart()
  {

    $chart = new pelangganChart;

    // Add the dataset (we will go with the chart template approach)
    $chart->dataset('Sample','bar', [100,65,84,45,90]);
    return view('customer.chartpelanggan', ['chart' => $chart]);
  }
}
