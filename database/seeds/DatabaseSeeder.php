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
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(ClientSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
