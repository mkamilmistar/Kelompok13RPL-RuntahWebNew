<?php

use Illuminate\Database\Seeder;
use App\User;

class adminseed extends Seeder
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
                'username'            => 'admin',
                'password'        => bcrypt("admin"),
                'email'           => 'admin@gmail.com',
                'role' => 'admin',
            ]
        ]);
    }
}
