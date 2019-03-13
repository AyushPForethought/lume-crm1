<?php


use App\Model\ClientSetting;
use Illuminate\Database\Seeder;

class ClientSettingstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client=new ClientSetting;
        $client->client_name='crmapi';
        $client->client_token='1234567';
        $client->client_service='lume-crm1';
        $client->client_db_connection='mysql';
        $client->client_db_driver='mysql';
        $client->client_db_host='127.0.0.1';
        $client->client_db_port='3306';
        $client->client_db_database='crmapi';
        $client->client_db_username='forethought';
        $client->client_db_password='123456';
        $client->client_db_prefix='';
        $client->save();
    }
}
