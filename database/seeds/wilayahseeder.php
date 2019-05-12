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
                'user_id' => '1',
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Arjasari',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Baleendah',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Batujajar',
                'date' => '2019-12-31',
                'time' => '07.00'

            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Cihampelas',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Babelan',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
            [
                'user_id' => '1',
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00'
            ],
        ]);
    }
}
