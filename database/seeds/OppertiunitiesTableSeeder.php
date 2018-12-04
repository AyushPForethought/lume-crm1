<?php

use Illuminate\Database\Seeder;

class OppertiunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $opportunities = factory(Oppertiunity::class, 10)->create();
    }
}
