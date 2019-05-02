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

        //DIY
        DB::table('post')->insert([
            'title' => 'Pengolahan Sampah di Surabaya',
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/D8m1msDYudc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        ]);
        DB::table('post')->insert([
            'title' => 'Inspirasi: Menghasilkan Uang dari Sampah Plastik',
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/a06Ilsp9xg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        ]);

        //DB information
        DB::table('information')->insert([
            'kecamatan' => 'Babakan Madang',
            'date' => 'Senin/26 Mei 2019',
            'time' => '07.00'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Bojong Gede',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Caringin',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.30'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Ciampea',
            'date' => 'Senin/26 Mei 2019',
            'time' => '09.00'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Ciawi',
            'date' => 'Senin/26 Mei 2019',
            'time' => '09.30'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Cibinong',
            'date' => 'Senin/26 Mei 2019',
            'time' => '07.00'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Ciomas',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
        DB::table('information')->insert([
            'kecamatan' => 'Dramaga',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
    }
}
