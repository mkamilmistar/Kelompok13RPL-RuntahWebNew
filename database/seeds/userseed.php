<?php

use Illuminate\Database\Seeder;
use App\User;

class userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'username'            => 'milnomercy',
                'password'        => bcrypt("rahasia"),
                'email'           => 'milnomercy@gmail.com',
                'role' => 'volunteer',
            ],
            [
                'username'            => 'suko',
                'password'        => bcrypt("rahasia"),
                'email'           => 'suko@gmail.com',
                'role' => 'volunteer',
            ],
            [
                'username'            => 'osi',
                'password'        => bcrypt("rahasia"),
                'email'           => 'osi@gmail.com',
                'role' => 'volunteer',
            ]
        ]);
    }
}
