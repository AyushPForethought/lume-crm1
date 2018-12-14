<?php

use Illuminate\Database\Seeder;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $opportunities = factory(Opportunity::class, 10)->create();
    }
}
