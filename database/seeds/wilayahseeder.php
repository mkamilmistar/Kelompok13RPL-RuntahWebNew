<?php

use Illuminate\Database\Seeder;
use App\Wilayah;

class wilayahseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::insert([
            [
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Arjasari',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Baleendah',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Batujajar',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'

            ],
            [
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Cihampelas',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Babelan',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
        ]);
    }
}
