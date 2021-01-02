<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = \App\Employee::create([
            'first_name' => 'James',
            'last_name' => 'C',
            'phone' => 1231246542,
            'email' => 'james@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
        $employee = \App\Employee::create([
            'first_name' => 'John',
            'last_name' => 'J',
            'phone' => 1239856542,
            'email' => 'john@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
        $employee = \App\Employee::create([
            'first_name' => 'Robert',
            'last_name' => 'H',
            'phone' => 1232416542,
            'email' => 'robert@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
        $employee = \App\Employee::create([
            'first_name' => 'Thomas',
            'last_name' => 'E',
            'phone' => 1232398442,
            'email' => 'thomas@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
        $employee = \App\Employee::create([
            'first_name' => 'Daniel',
            'last_name' => 'P',
            'phone' => 1232302542,
            'email' => 'daniel@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
        $employee = \App\Employee::create([
            'first_name' => 'Donald',
            'last_name' => 'N',
            'phone' => 1232302542,
            'email' => 'daniel@test.com'
        ]);
        DB::table('employee_service')->insert([
            'employee_id' => $employee->id,
            'service_id' => $employee->id
        ]);
    }
}
