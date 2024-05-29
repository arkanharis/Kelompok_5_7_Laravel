<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'EmpId' => '10805121',
            'FirstName' => 'Rahul',
            'LastName' => 'Kumar',
            'EmailId' => 'rk1995@test.com',
            'Password' => 'f925916e2754e5e03f75dd58a5733251',
            'Gender' => 'Male',
            'Dob' => '3 August, 1995',
            'Department' => 'Information Technology',
            'Address' => 'A 123 XYZ Apartment ',
            'City' => 'New Delhi',
            'Country' => 'India',
            'Phonenumber' => '12121212',
            'Status' => 1,
            'RegDate' => Carbon::create('2023', '08', '31', '14', '56', '23')
        ]);

        Employee::create([
            'EmpId' => '10235612',
            'FirstName' => 'Garima',
            'LastName' => 'Yadav',
            'EmailId' => 'grama123@gmail.com',
            'Password' => 'f925916e2754e5e03f75dd58a5733251',
            'Gender' => 'Female',
            'Dob' => '2 January, 1997',
            'Department' => 'Accounts',
            'Address' => 'Hno 123 ABC Colony',
            'City' => 'New Delhi',
            'Country' => 'India',
            'Phonenumber' => '7485963210',
            'Status' => 1,
            'RegDate' => Carbon::create('2023', '08', '31', '15', '02', '47')
        ]);

        Employee::create([
            'EmpId' => '7856214',
            'FirstName' => 'John',
            'LastName' => 'Doe',
            'EmailId' => 'jhn12@gmail.com',
            'Password' => 'f925916e2754e5e03f75dd58a5733251',
            'Gender' => 'Male',
            'Dob' => '3 January, 1995',
            'Department' => 'Accounts',
            'Address' => 'H no 1',
            'City' => 'Ghaziabad ',
            'Country' => 'India',
            'Phonenumber' => '23232323',
            'Status' => 1,
            'RegDate' => Carbon::create('2023', '09', '01', '11', '38', '23')
        ]);
    }
}
