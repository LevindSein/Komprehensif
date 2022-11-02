<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('users')->insert([
            [
                'name' => 'Fahni Amsyari',
                'jk'   => 'L'
            ],
            [
                'name' => 'Dinda Sahara',
                'jk'   => 'P'
            ],
        ]);

        DB::table('datas')->insert([
            [
                'user_id' => 1
            ],
            [
                'user_id' => 2
            ]
        ]);
    }
}
