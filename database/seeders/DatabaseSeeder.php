<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\User;
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
        DB::table('classes')->truncate(); # optionnel
        Classe::factory(5)->create();

        DB::table('users')->truncate(); # optionnel
        User::factory(10)->create();
    }
}
