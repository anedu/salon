<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master;

class MasterController extends Controller
{
    public function show()
    {
    		$masters = Master::with('services')->get();
    		return view("masters",["results"=>$masters]);
    		
    		/*$services = Master::find($master->id)->services;
    		foreach ($services as $service) {
    			$result = $master->merge($service);
    		}
  
    		return view("masters",["results"=>$result]);*/
		
    }
}
