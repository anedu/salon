<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates=[];
        $from = Carbon::createFromTimeString("09:00:00");
        $to = Carbon::createFromTimeString("18:00:00");
          
        for($date = $from; $date->lte($to); $date->addHour()) {      
             array_push($dates, $date->format('H-i-s'));      
        }

        for($i=0; $i<count($dates); $i++){
             DB::table('times')->insert([
                'time' =>$dates[$i],      
            ]);
        }
        /*DB::table('times')->insert([
            'time' => "11:00:00",
        ]);*/
    }
}
