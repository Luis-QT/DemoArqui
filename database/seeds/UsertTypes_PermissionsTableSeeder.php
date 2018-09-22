<?php

use Illuminate\Database\Seeder;

class UsertTypes_PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* PERMISOS DE JEFE DE BIBLIOTECA*/
        DB::table('userTypes_permissions')->insert([
           'userType_id' => 1,
           'permission_id' => 1
        ]);
        DB::table('userTypes_permissions')->insert([
          'userType_id' => 1,
          'permission_id' => 2
        ]);
        DB::table('userTypes_permissions')->insert([
           'userType_id' => 1,
           'permission_id' => 3
        ]);
         DB::table('userTypes_permissions')->insert([
            'userType_id' => 1,
            'permission_id' => 4
        ]);
    }
}
