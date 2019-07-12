<?php

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB:table('times')->insert([
            'time' => '11:00:00',
        ]);
    }
}
