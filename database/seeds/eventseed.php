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
                'nama_event' => 'Bersih-bersih di arjasari',
                'image' => 'c1r.jpg',
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Arjasari',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Pajajaran No.35',
                'status' => 'Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih di baleendah',
                'image' => 'c2r.jpg',
                'kabupaten' => 'Bandung',
                'kecamatan' => 'Baleendah',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Gajah Mada No.4',
                'status' => 'Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih di batujajar',
                'image' => 'c3r.jpg',
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Batujajar',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Imam Bonjol No.35',
                'status' => 'Tidak Tersedia'

            ],
            [
                'nama_event' => 'Bersih-bersih di Cihampelas',
                'image' => 'c4r.jpg',
                'kabupaten' => 'Bandung Barat',
                'kecamatan' => 'Cihampelas',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Kucing No.35',
                'status' => 'Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih di Babelan',
                'image' => 'c5r.jpg',
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Babelan',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Anjing No.35',
                'status' => 'Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih pagi indah di bojongmangu',
                'image' => 'c6r.jpg',
                'kabupaten' => 'Bekasi',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Kura-kura No.35',
                'status' => 'Tidak Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih di bojongmangu',
                'image' => 'c7r.jpg',
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Kucing Kawin No.35',
                'status' => 'Tidak Tersedia'
            ],
            [
                'nama_event' => 'Bersih-bersih di bogor',
                'image' => 'c8r.jpg',
                'kabupaten' => 'Bogor',
                'kecamatan' => 'Bojongmangu',
                'date' => '2019-12-31',
                'time' => '07.00',
                'location' => 'Jalan Yayak No.35',
                'status' => 'Tersedia'
            ],

        ]);
    }
}
