<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use App\Models\Teacher;
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

        DB::table('students')->truncate(); # optionnel
        Student::factory(10)->create();

        DB::table('teachers')->truncate(); # optionnel
        Teacher::factory(10)->create();

        DB::table('subjects')->truncate(); # optionnel
        Subject::factory(10)->create();
    }
}
