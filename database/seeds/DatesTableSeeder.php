<?php
use App\Date;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$dates=[];
    	$from = Carbon::createFromDate(2019, 6, 1);
    	$to = Carbon::createFromDate(2019, 6, 30);
    	  
	    for($date = $from; $date->lte($to); $date->addDay()) {      
	         array_push($dates, $date->format('Y-m-d'));      
	    }

 		for($i=0; $i<count($dates); $i++){
    		 DB::table('dates')->insert([
        		'date' =>$dates[$i],      
    		]);
		}


    }
}
