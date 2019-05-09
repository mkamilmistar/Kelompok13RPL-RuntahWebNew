<?php

use Illuminate\Database\Seeder;
use App\Event;

class eventseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Arjasari',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Pajajaran No.35'
            ],
            [
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Baleendah',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Gajah Mada No.4'
            ],
            [
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Batujajar',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Imam Bonjol No.35'

            ],
            [
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Cihampelas',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Kucing No.35'
            ],
            [
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Babelan',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Anjing No.35'
            ],
            [
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Kura-kura No.35'
            ],
            [
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Kucing Kawin No.35'
            ],
            [
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Yayak No.35'
            ],
            [
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Intan No.35'
            ],
            [
                'kabupaten' => 'Ciamis',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Berlian No.35'
            ],
            [
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Pelangi No.35'
            ],
            [
                'kabupaten' => 'Cianjur',
                'kecamatan' => 'Bojongmangu',
                'date' => 'Senin/27 Mei 2019',
                'time' => '07.00',
                'location' => 'Jalan Arya No.35'
            ],
        ]);
    }
}
