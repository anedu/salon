<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master;
use Carbon\Carbon;

class MasterController extends Controller
{
    public function show()
    {
    		$masters = Master::with('services')->get();
    		


            $master = Master::find(1);
            $master->services()->attach(3);

            return view("masters",["results"=>$masters]);

    		
    		
    		/*$services = Master::find($master->id)->services;
    		foreach ($services as $service) {
    			$result = $master->merge($service);
    		}
  
    		return view("masters",["results"=>$result]);*/		
    }
    public function dateRange()

{

    $from = Carbon::createFromDate(2017, 7, 21);

    $to = Carbon::createFromDate(2017, 6, 21);

    $dates = $this->generateDateRange($to, $from);

    for($i=0;$i<count($dates);$i++){
       echo   $dates[$i];
    }    

}

private function generateDateRange(Carbon $start_date, Carbon $end_date)

{

    $dates = [];

    for($date = $start_date; $date->lte($end_date); $date->addDay()) {

          array_push($dates, $date->format('Y-m-d')); 

    }

    return $dates;

}
}
