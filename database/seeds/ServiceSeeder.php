<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Service::create([
            'name' => 'General Doctor',
            'price' => 150,
        ]);
        \App\Service::create([
            'name' => 'Dentist',
            'price' => 250,
        ]);
        \App\Service::create([
            'name' => 'ENT Doctor',
            'price' => 300,
        ]);
        \App\Service::create([
            'name' => 'Psychiatrists',
            'price' => 400,
        ]);
        \App\Service::create([
            'name' => 'Radiologist',
            'price' => 400,
        ]);
        \App\Service::create([
            'name' => 'Neurologist',
            'price' => 500,
        ]);
    }
}
