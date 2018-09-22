<?php

use Illuminate\Database\Seeder;
use App\Editorial;

class Editorials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorial = Editorial::create([
        	'name'=>'Instituto de Investigación',
        ]);
        $editorial->categories()->attach(3);
    }
}
