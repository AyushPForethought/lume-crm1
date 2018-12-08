<?php

use Illuminate\Database\Seeder;

classOpportunitiesTableSeeder extends Seeder
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
