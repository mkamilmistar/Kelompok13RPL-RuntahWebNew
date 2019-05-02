<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'username' => 'iye13',
            'email' => 'iye13@runtahweb.com',
            'password' => bcrypt('1y3runtah'),
            'role' => 'admin'
        ]);

        DB::table('admins')->insert([
            'admin_id' => '1'
        ]);
    }
}
