<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Reception;


class pelangganChart extends Chart
{

/**
* Initializes the chart.
*
* @return void
*/


public function __construct(){
  parent::__construct();
  $tanggal = Reception::get();
  $this->$tanggal= array ('Reception');

  foreach($tanggal as $date){
    labels([
     $this->$date[$date->tgl_masuk] = $date->tgl_masuk;
    ])
      ->options([
        'legend' => [
          'display' =>false
        ]
      ]);

}

}
}
