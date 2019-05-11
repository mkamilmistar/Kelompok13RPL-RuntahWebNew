<?php

use Illuminate\Database\Seeder;
use App\Join;

class joinseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Join::insert([
            [
                'user_id'         => '1',
                'event_id'         => '1',

            ]
        ]);
    }
}
