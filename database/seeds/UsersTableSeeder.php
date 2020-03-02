<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Mirko_A',
            'email' => 'mirkohijo@gmail.com',
            'password' => bcrypt('@admin1@'),
            'rol' => 0
        ]);

        // Admin
        User::create([
            'name' => 'Mirko',
            'email' => 'mirkoadmin@gmail.com',
            'password' => bcrypt('@admin1@'),
            'rol' => 0
        ]);

        // Profesor
        User::create([
            'name' => 'Mirko_P',
            'email' => 'mirkohijo@hotmail.com',
            'password' => bcrypt('@admin1@'),
            'rol' => 1
        ]);
        // Usuario normal, alumno, padre
        User::create([
            'name' => 'Mirko_User',
            'email' => 'mirkohijo@gemail.com',
            'password' => bcrypt('@admin1@'),
            'rol' => 2
        ]);

    }
}
