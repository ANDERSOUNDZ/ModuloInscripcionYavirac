<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Gorky Estrella',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Yogledis Herrera',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Yolanda Moya',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Pablo Robayo',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Fanny Sanchez',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Geovany Pazmino',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Maritza Tituaña',
        ]);
        DB::table('profesors')->insert([
            'NOMBRES' => 'Ing. Mauricio Tamayo',
        ]);
    }
}
