<?php

use Illuminate\Database\Seeder;

class ClientSettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientSettingstableSeeder::class);
    }
}
