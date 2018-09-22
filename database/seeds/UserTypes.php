<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	UserType::create([
        	'name' => 'Jefe de Biblioteca',
        ]);
        UserType::create([
        	'name' => 'Trabajador',
        ]);
        UserType::create([
        	'name' => 'administrador',
        ]);
        UserType::create([
        	'name' => 'Bolsista',
        ]);
        UserType::create([
        	'name' => 'Pregrado',
        ]);
        UserType::create([
        	'name' => 'Postgrado',
        ]);
        UserType::create([
        	'name' => 'Docente',
        ]);
        UserType::create([
        	'name' => 'Externo',
        ]);
    }
}
