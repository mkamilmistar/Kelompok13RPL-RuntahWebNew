<?php

use Illuminate\Database\Seeder;
use App\Report;

class reportseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::insert([
            [
                'report_id'         => '1',
                'report'            => 'Anonym',

            ]
        ]);
    }
}
