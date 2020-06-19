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
         $this->call(CreateSeederForTableCooperative::class);
         $this->call(CreateSeederForTablePisteur::class);
         $this->call(CreateSeederForTableProduit::class);
         $this->call(CreateSeederForTableProducteur::class);
    }
}
