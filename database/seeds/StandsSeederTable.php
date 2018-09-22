<?php

use Illuminate\Database\Seeder;

class StandsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('stands')->insert([
              'level'=> 1,
              'name'=>'A1',
              'type'=>2,
              'state'=>0
            ]);
            DB::table('stands')->insert([
              'level'=> 1,
              'name'=>'A2',
              'type'=>1,
              'state'=>0
            ]);
            DB::table('stands')->insert([
              'level'=> 1,
              'name'=>'A3',
              'type'=>1,
              'state'=>0
            ]);
            DB::table('stands')->insert([
              'level'=> 1,
              'name'=>'A4',
              'type'=>1,
              'state'=>0
            ]);
    }
}
