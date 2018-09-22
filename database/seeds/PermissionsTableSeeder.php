<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* GESTION DE LIBRO */
      DB::table('permissions')->insert([
         'name' => 'crear libro'
     ]);
       DB::table('permissions')->insert([
          'name' => 'editar libro'
      ]);
        DB::table('permissions')->insert([
           'name' => 'eliminar libro'
       ]);
       DB::table('permissions')->insert([
          'name' => 'observar libro'
      ]);
    }
}
