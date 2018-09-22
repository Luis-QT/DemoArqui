<?php

use Illuminate\Database\Seeder;
use App\Category;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=>'Libro',
        ]);
        Category::create([
        	'name'=>'Tesis o Informe',
        ]);
        Category::create([
        	'name'=>'Revista',
        ]);
    }
}
