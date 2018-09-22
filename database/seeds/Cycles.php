<?php

use Illuminate\Database\Seeder;

class Cycles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cycles')->insert([
         'name' => 'Ciclo 2018-I',
         'startDate' => DateTime::createFromFormat('Y-m-d H:i:s', '2018-08-13 00:00:00'),
         'endDate' => DateTime::createFromFormat('Y-m-d H:i:s', '2018-12-10 00:00:00')
     ]);
    }
}
