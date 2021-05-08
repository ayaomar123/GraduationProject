<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt(12345678),
        ]);

        $user->assignRole('customer');


    }
}
