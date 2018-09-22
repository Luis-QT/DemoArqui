<?php

use Illuminate\Database\Seeder;

class CycleSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('cycles')->insert([
         'name' => '2018',
         'startDate' => 'asd',
         'endDate' => 'asd2'
     ]);
    }
}
