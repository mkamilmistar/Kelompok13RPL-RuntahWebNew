<?php

use Illuminate\Database\Seeder;
use App\District;
use App\Subdistrict;

class wilayahseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::insert([
            ['kabupaten' => 'Bandung', 'kabupaten_id' => '1'],

            ['kabupaten' => 'Bandung Barat', 'kabupaten_id' => '2'],

            ['kabupaten' => 'Bekasi', 'kabupaten_id' => '3'],

            ['kabupaten' => 'Bogor', 'kabupaten_id' => '4'],

            ['kabupaten' => 'Ciamis', 'kabupaten_id' => '5'],

            ['kabupaten' => 'Cianjur', 'kabupaten_id' => '6'],

            ['kabupaten' => 'Cirebon', 'kabupaten_id' => '7'],

            ['kabupaten' => 'Garut', 'kabupaten_id' => '8'],

            ['kabupaten' => 'Indramayu', 'kabupaten_id' => '9'],

            ['kabupaten' => 'Karawang', 'kabupaten_id' => '10'],

            ['kabupaten' => 'Kuningan', 'kabupaten_id' => '11'],

            ['kabupaten' => 'Majalengka', 'kabupaten_id' => '12'],

            ['kabupaten' => 'Pangandaran', 'kabupaten_id' => '13'],

            ['kabupaten' => 'Purwakarta', 'kabupaten_id' => '14'],

            ['kabupaten' => 'Subang', 'kabupaten_id' => '15'],

            ['kabupaten' => 'Sukabumi', 'kabupaten_id' => '16'],

            ['kabupaten' => 'Sumedang', 'kabupaten_id' => '17'],

            ['kabupaten' => 'Tasikmalaya', 'kabupaten_id' => '18'],

            ['kabupaten' => 'Kota Bandung', 'kabupaten_id' => '19'],

            ['kabupaten' => 'Kota Banjar', 'kabupaten_id' => '20'],

            ['kabupaten' => 'Kota Bekasi', 'kabupaten_id' => '21'],

            ['kabupaten' => 'Kota Bogor', 'kabupaten_id' => '22'],

            ['kabupaten' => 'Kota Cimahi', 'kabupaten_id' => '23'],

            ['kabupaten' => 'Kota Cirebon', 'kabupaten_id' => '24'],

            ['kabupaten' => 'Kota Depok', 'kabupaten_id' => '25'],

            ['kabupaten' => 'Kota Sukabumi', 'kabupaten_id' => '26'],

            ['kabupaten' => 'Kota Tasikmalaya', 'kabupaten_id' => '27']
        ]);

        Subdistrict::insert([
            [
                'kecamatan_id' => '1',
                'kecamatan' => 'Arjasari',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan_id' => '1',
                'kecamatan' => 'Baleendah',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan_id' => '2',
                'kecamatan' => 'Batujajar',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'

            ],
            [
                'kecamatan_id' => '2',
                'kecamatan' => 'Cihampelas',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan_id' => '3',
                'kecamatan' => 'Babelan',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
            [
                'kecamatan_id' => '3',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00'
            ],
        ]);
    }
}
