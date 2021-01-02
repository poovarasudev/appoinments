<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Client::create([
            'first_name' => 'Client 1',
            'last_name' => 'Client One',
            'phone' => 1232346542,
            'email' => 'client1@test.com'
        ]);
        \App\Client::create([
            'first_name' => 'Client 2',
            'last_name' => 'Client Two',
            'phone' => 1238346542,
            'email' => 'client2@test.com'
        ]);
        \App\Client::create([
            'first_name' => 'Client 3',
            'last_name' => 'Client Three',
            'phone' => 1232346582,
            'email' => 'client3@test.com'
        ]);
    }
}
