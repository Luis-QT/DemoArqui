<?php

use Illuminate\Database\Seeder;
use App\Author;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = Author::create([
        	'name'=>'Facultad de Ingeniería de Sistemas e Informática',
        ]);
        $autor->categories()->attach(3);
    }
}
