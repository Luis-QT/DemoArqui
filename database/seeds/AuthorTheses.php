<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorTheses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	/*AUTOR DE TESIS 1*/
        Author::create([
        	'name' => 'P. Luis Antonio Quispe Taquire',
        ]);
        Author::create([
        	'name' => 'P. Orlando Segundo',
        ]);
        /*AUTOR DE TESIS 2*/
        Author::create([
        	'name' => 'P. Lidia Nuñez Gerada',
        ]);

        /*ASIGNANDO SUS CATEGORIAS*/
        DB::table('authors_categories')->insert([
	       'author_id' => 1,
	       'category_id' => 2,
	      ]);
	      DB::table('authors_categories')->insert([
	       'author_id' => 2,
	       'category_id' => 2,
	      ]);
	      DB::table('authors_categories')->insert([
	       'author_id' => 3,
	       'category_id' => 2,
	      ]);

	      /*Asignando su tesis*/
	      DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 1,
        ]);
        DB::table('thesis_authors')->insert([
          'author_id' => 2,
          'thesis_id' => 1,
        ]);
        DB::table('thesis_authors')->insert([
          'author_id' => 3,
          'thesis_id' => 2,
        ]);
        
    }
}
