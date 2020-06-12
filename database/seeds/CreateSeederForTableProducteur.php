<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateSeederForTableProducteur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producteurs')->insert([

                [
                    'nom' => 'KOUADIO',
                    'prenom' => 'ALPHONSE',
                    'datenaiss' => Carbon::now(),
                    'localite' => 'GRAND ZATTRY',
                    'cooperative_id' => '4',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'nom' => 'OUEDRAOGO',
                    'prenom' => 'BOUKARY',
                    'datenaiss' => Carbon::now(),
                    'localite' => 'MEAGUI',
                    'cooperative_id' => '1',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'nom' => 'KOUASSI',
                    'prenom' => 'KOUASSI BENOIT',
                    'datenaiss' => Carbon::now(),
                    'localite' => 'TAPEGUIA',
                    'cooperative_id' => '2',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ],
                [
                    'nom' => 'TAPE',
                    'prenom' => 'GNABO FLORENTIN IGNACE',
                    'datenaiss' => Carbon::now(),
                    'localite' => 'GRAND ZATTRY',
                    'cooperative_id' => '4',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]

            ]
        );
    }
}
