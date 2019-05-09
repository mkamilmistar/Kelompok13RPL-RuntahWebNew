<?php

use Illuminate\Database\Seeder;
use App\Information;

class informationseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB information
        Information::create([
            'kecamatan' => 'Babakan Madang',
            'date' => 'Senin/26 Mei 2019',
            'time' => '07.00'
        ]);
        Information::create([
            'kecamatan' => 'Bojong Gede',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
        Information::create([
            'kecamatan' => 'Caringin',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.30'
        ]);
        Information::create([
            'kecamatan' => 'Ciampea',
            'date' => 'Senin/26 Mei 2019',
            'time' => '09.00'
        ]);
        Information::create([
            'kecamatan' => 'Ciawi',
            'date' => 'Senin/26 Mei 2019',
            'time' => '09.30'
        ]);
        Information::create([
            'kecamatan' => 'Cibinong',
            'date' => 'Senin/26 Mei 2019',
            'time' => '07.00'
        ]);
        Information::create([
            'kecamatan' => 'Ciomas',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
        Information::create([
            'kecamatan' => 'Dramaga',
            'date' => 'Senin/26 Mei 2019',
            'time' => '08.00'
        ]);
    }
}
