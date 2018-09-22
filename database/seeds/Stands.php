<?php

use Illuminate\Database\Seeder;
use App\Stand;

class Stands extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stand::create([
        	'level'=> 1,
        	'name'=>'Revistas-1',
        	'type'=>2,
        	'state'=>0
        ]);
    }
}
