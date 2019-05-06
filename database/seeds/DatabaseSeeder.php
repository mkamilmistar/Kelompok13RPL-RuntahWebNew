<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(adminseed::class);
        $this->call(diyseed::class);
        $this->call(informationseed::class);
        $this->call(userseed::class);
        $this->call(reportseed::class);
        $this->call(wilayahseeder::class);
    }
}
