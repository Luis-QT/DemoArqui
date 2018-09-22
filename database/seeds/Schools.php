<?php

use Illuminate\Database\Seeder;
use App\School;

class Schools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
        	'name'=> 'Ingeniería de Sistemas',
        	'faculty_id'=>1,
        ]);

        School::create([
        	'name'=> 'Ingeniería de Software',
        	'faculty_id'=>1,
        ]);

        School::create([
            'name'=> 'Ingeniería Industrial',
            'faculty_id'=>2,
        ]);
    }
}
