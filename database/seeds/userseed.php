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
                'nama_depan'    => 'Mil',
                'nama_belakang' => 'Nomercy',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '082283777098',
                'alamat' => 'Riau',
                'nik_pengguna' => '140423485746',
                'role' => 'volunteer',
                'point' => 600
            ],
            [
                'username'            => 'suko',
                'password'        => bcrypt("rahasia"),
                'email'           => 'suko@gmail.com',
                'nama_depan'    => 'Suko',
                'nama_belakang' => 'Ntol',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '082283775643',
                'alamat' => 'Riau',
                'nik_pengguna' => '140445775746',
                'role' => 'volunteer',
                'point' => 300
            ],
            [
                'username'            => 'osi',
                'password'        => bcrypt("rahasia"),
                'email'           => 'osi@gmail.com',
                'nama_depan'    => 'Osi',
                'nama_belakang' => 'Suseso',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '082283775432',
                'alamat' => 'Riau',
                'nik_pengguna' => '140423484576',
                'role' => 'volunteer',
                'point' => 1500
            ]
        ]);
    }
}
