<?php

use Illuminate\Database\Seeder;
use App\Post;

class diyseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DIY
        Post::insert([
            [
                'post_id' => '1',
                'image' => 'c1r.jpg',
                'title' => 'Pengolahan Sampah di Surabaya',
                'content' => '<p>Di kota-kota besar maupun di pedesaan di seluruh Indonesia, sampah kerap menjadi masalah. Tingginya akumulasi sampah membuat lingkungan menjadi kotor dan tidak sehat, belum lagi bencana banjir dan efek rumah kaca sebagai polusi dari sampah tersebut. Dari sinilah, timbul pemikiran bagaimana cara menghasilkan uang dari sampah menjadi sesuatu yang bermanfaat.</p>',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'post_id' => '1',
                'image' => 'c2r.jpg',
                'title' => 'Inspirasi: Menghasilkan Uang dari Sampah Plastik',
                'content' => '<p>Memang tidak ada yang dapat menyangka bahwa sampah dapat menjadi sebuah peluang bisnis menguntungkan. Tetapi tidak hanya menghasilkan keuntungan berupa materi, bisnis pengolahan sampah juga bermanfaat untuk pelestarian lingkungan. Beberapa contoh pengolahan sampah yang telah terbukti mendatangkan penghasilan lumayan adalah seperti berikut ini.</p>',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'post_id' => '1',
                'image' => 'c3r.jpg',
                'title' => 'Fakta Pencemaran Air',
                'content' => '<p>Potensi bisnis menguntungkan dari sampah salah satunya adalah usaha pengolahan sampah plastik, karena peningkatan sampah plastik yang semakin tak terkendali. Sampah plastik tersebut contohnya adalah botol, gelas minuman atau botol oli dan sebagainya. Ada yang mengelola sampah plastik menjadi biji plastik dengan cara dicuci bersih, kemudian digiling dan dijadikan biji plastik.</p>',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'post_id' => '1',
                'image' => 'c3r.jpg',
                'title' => 'Fakta Pencemaran Air',
                'content' => '<p>Potensi bisnis menguntungkan dari sampah salah satunya adalah usaha pengolahan sampah plastik, karena peningkatan sampah plastik yang semakin tak terkendali. Sampah plastik tersebut contohnya adalah botol, gelas minuman atau botol oli dan sebagainya. Ada yang mengelola sampah plastik menjadi biji plastik dengan cara dicuci bersih, kemudian digiling dan dijadikan biji plastik.</p><iframe width="560" height="315" src="https://www.youtube.com/embed/a06Ilsp9xg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'post_id' => '1',
                'image' => 'c3r.jpg',
                'title' => 'Fakta Pencemaran Air',
                'content' => '<p>Potensi bisnis menguntungkan dari sampah salah satunya adalah usaha pengolahan sampah plastik, karena peningkatan sampah plastik yang semakin tak terkendali. Sampah plastik tersebut contohnya adalah botol, gelas minuman atau botol oli dan sebagainya. Ada yang mengelola sampah plastik menjadi biji plastik dengan cara dicuci bersih, kemudian digiling dan dijadikan biji plastik.</p><iframe width="560" height="315" src="https://www.youtube.com/embed/a06Ilsp9xg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'created_at' => date("Y-m-d H:i:s")
            ]


        ]);
    }
}
