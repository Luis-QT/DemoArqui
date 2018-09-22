<?php

use Illuminate\Database\Seeder;
use App\Faculty;

class Faculties extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::create([
        	'name'=>'Ingeniería de Sistemas e Informática',
        ]);

        Faculty::create([
            'name'=>'Ingeniería Industrial',
        ]);
    }
}
