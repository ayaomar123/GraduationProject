<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(CreateAdminSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(scholarshipsSeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(QuestionSeeder::class);
//        $this->call(AnswerSeeder::class);
    }
}
