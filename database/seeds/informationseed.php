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
            [
                'kecamatan' => 'Babakan Madang',
                'date' => 'Senin/26 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan' => 'Bojong Gede',
                'date' => 'Senin/26 Mei 2019',
                'time' => '08.00'
            ],
            [
                'kecamatan' => 'Caringin',
                'date' => 'Senin/26 Mei 2019',
                'time' => '08.30'
            ],
            [
                'kecamatan' => 'Ciampea',
                'date' => 'Senin/26 Mei 2019',
                'time' => '09.00'
            ],
            [
                'kecamatan' => 'Ciawi',
                'date' => 'Senin/26 Mei 2019',
                'time' => '09.30'
            ],
            [
                'kecamatan' => 'Cibinong',
                'date' => 'Senin/26 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan' => 'Ciomas',
                'date' => 'Senin/26 Mei 2019',
                'time' => '08.00'
            ],
            [
                'kecamatan' => 'Dramaga',
                'date' => 'Senin/26 Mei 2019',
                'time' => '08.00'
            ]
        ]);
    }
}
