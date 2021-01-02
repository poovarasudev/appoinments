<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'title' => 'Admin'],
            ['id' => 2, 'title' => 'Simple User'],
        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
