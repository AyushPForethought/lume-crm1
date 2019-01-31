<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $this->call(AccountsTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(OpportunitiesTableSeeder::class);
         $this->call(CampaignsTableSeeder::class);
         $this->call(LeadsTableSeeder::class);
    }
}
