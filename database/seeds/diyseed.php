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
                'title' => 'Pengolahan Sampah di Surabaya',
                'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/D8m1msDYudc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'post_id' => '1',
                'title' => 'Inspirasi: Menghasilkan Uang dari Sampah Plastik',
                'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/a06Ilsp9xg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'post_id' => '1',
                'title' => 'Fakta Pencemaran Air',
                'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/a06Ilsp9xg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ]


        ]);
    }
}
