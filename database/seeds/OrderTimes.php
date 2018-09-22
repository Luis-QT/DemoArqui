<?php

use Illuminate\Database\Seeder;
use App\OrderTime;

class OrderTimes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderTime::create([
	        'time'=> 3
        ]);
        OrderTime::create([
	        'time'=> 7
        ]);
        OrderTime::create([
	        'time'=> 15
        ]);
        OrderTime::create([
	        'time'=> null
        ]);
    }
}
