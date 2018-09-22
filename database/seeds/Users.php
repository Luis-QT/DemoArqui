<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserSpecification;
use App\Configuration;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /********* 1.- Maribel Luyo Almonte - Jefe de Biblioteca *********/
        User::create([
            'name' => 'Maribel',
        	'lastName' => 'Luyo Almonte',
        	'dni' => null,
            'code' => 'maribel.luyo@admin.com',
            'instEmail' => 'mluyoa_af@unmsm.edu.pe',
            'userType_id'=> 1,
            'state' => 4
        ]);
        UserSpecification::create([
            'phone' => '7',
            'cellPhone' => null,
            'personalEmail' => 'maribelluyo@gmail.com',
            'address' => 'Jr. José Carlos Mariátegui #275 Carmen de la legua',
            'description' => null,
            'urlImg'=> null,
            'password' => bcrypt('admin'),
            'user_id' => 1,
        ]);


      /********* 2.- Luis Quispe Taquire*********/
        User::create([
        	'name' => 'Luis Antonio',
        	'lastName' => 'Quispe Taquire',
        	'dni' => '71561198',
            'code' => 'admin@admin.com',
            'instEmail' => 'luis.qt@admin.com',
            'userType_id'=> 3,
            'state' => 4
        ]);
        UserSpecification::create([
            'phone' => 'prueba',
            'cellPhone' => 'prueba',
            'personalEmail' => 'luis@gmail.com',
            'address' => 'direccion',
            'description' => 'descripcion',
            'urlImg'=> null,
            'password' => bcrypt('admin'),
            'user_id' => 2,
        ]);
        /********* 3.- Jose Mateo Carrasco *********/
        User::create([
          'name' => 'Jose Francisco',
          'lastName' => 'Mateo Carrasco',
          'dni' => '77041708',
            'code' => 'jose.mc@admin.com',
            'instEmail' => 'jose.mc@admin.com',
            'userType_id'=> 3,
            'state' => 4
        ]);
        UserSpecification::create([
            'phone' => '6426787',
            'cellPhone' => '952283982',
            'personalEmail' => 'locutermo@gmail.com',
            'address' => 'Jr.Sol de Oro 7508 - Los Olivos',
            'description' => 'descripcion',
            'urlImg'=> null,
            'password' => bcrypt('admin'),
            'user_id' => 3,
        ]);
        /********* 4.- Giordano Barbieri  *********/
        User::create([
            'name' => 'Giordano',
            'lastName' => 'Barbieri',
            'dni' => '71561100',
            'code' => '16200111',
            'instEmail' => 'giordano.b@admin.com',
            'school_id' => 1,
            'userType_id'=> 3,
            'state' => 3
        ]);
        
        UserSpecification::create([
            'phone' => 'prueba',
            'cellPhone' => 'prueba',
            'personalEmail' => 'giordano@gmail.com',
            'address' => 'direccion',
            'description' => 'descripcion',
            'urlImg'=> null,
            'password' => bcrypt('admin'),
            'user_id' => 4,
        ]);

        /********* 5.- LECTOR 1  *********/
        User::create([
            'name' => 'Edisson',
            'lastName' => 'Taquire Mendoza',
            'dni' => '715634132',
            'code' => '15200200',
            'instEmail' => 'edisson@edisson.com',
            'school_id' => 3,
            'userType_id'=> 5,
            'state' => 0
        ]);
        Configuration::create([
            'highlightSearch'=>0,
            'user_id'=>5,
        ]);
        UserSpecification::create([
            'phone' => 'prueba',
            'cellPhone' => 'prueba',
            'personalEmail' => 'edisson@gmail.com',
            'address' => 'direccion',
            'description' => 'descripcion',
            'urlImg'=> null,
            'password' => bcrypt('edisson'),
            'user_id' => 5,
        ]);

        /********* 6.- LECTOR 2  *********/
        User::create([
            'name' => 'Valeria Luz',
            'lastName' => 'Milagros Inocente',
            'dni' => '715613232',
            'code' => '17200212',
            'instEmail' => 'valeria@unmsm.edu.pe',
            'school_id' => 3,
            'userType_id'=>5,
            'state' => 0
        ]);
        Configuration::create([
            'highlightSearch'=>0,
            'user_id'=>6,
        ]);
        UserSpecification::create([
            'phone' => 'prueba',
            'cellPhone' => 'prueba',
            'personalEmail' => 'valeria@gmail.com',
            'address' => 'direccion',
            'description' => 'descripcion',
            'urlImg'=> null,
            'password' => bcrypt('valeria'),
            'user_id' => 6,
        ]);

    }
}
