<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['libelle'=>'6eme'],
            ['libelle'=>'5eme'],
            ['libelle'=>'4eme'],
            ['libelle'=>'3eme'],
            ['libelle'=>'2eme'],
            ['libelle'=>'1eme'],

        ]);
    }
}
