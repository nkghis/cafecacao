<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateSeederForTableCooperative extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cooperatives')->insert(
            [
                [
                    'libelle' => 'PAS DE COOPERATIVE',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'libelle' => 'ZATTA CORP SOUBRE',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'libelle' => 'GNADA BETE COOPERATIVE',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'libelle' => 'LES JEUNES DE GRAND ZATTRY',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            ]
        );
    }
}
