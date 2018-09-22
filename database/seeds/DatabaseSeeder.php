<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Categories::class);
        $this->call(StandsSeederTable::class);
        $this->call(Faculties::class);
        $this->call(Schools::class);
        $this->call(Theses::class);
        $this->call(AuthorTheses::class);
        //  $this->call(thesisDB::class);
        //  $this->call(thesisDB1::class);
        //  $this->call(thesisDB2::class);
         $this->call(UserTypes::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsertTypes_PermissionsTableSeeder::class);

        $this->call(Users::class);
        $this->call(Categories::class);
        $this->call(Cycles::class);
        // $this->call(OrderSeedTable::class);
        $this->call(OrderTimes::class);

        //Para hacer pruebas
        //$this->call(PruebaCastigos::class);
    }
}
