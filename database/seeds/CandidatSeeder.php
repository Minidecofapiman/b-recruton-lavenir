<?php

use Illuminate\Database\Seeder;

class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('candidats')->insert([
            'nom'    => 'NOM 1',
            'prenom' => 'PRENOM 1',
            'email'  => 'EMAIL 1'
        ]);

        DB::table('candidats')->insert([
            'nom'    => 'NOM 2',
            'prenom' => 'PRENOM 2',
            'email'  => 'EMAIL 2'
        ]);


    }
}
