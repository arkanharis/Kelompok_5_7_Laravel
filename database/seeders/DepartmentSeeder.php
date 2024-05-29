<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'DepartmentName' => 'Human Resource',
            'DepartmentShortName' => 'HR',
            'DepartmentCode' => 'HR01',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '50', '20')
        ]);

        Department::create([
            'DepartmentName' => 'Information Technology',
            'DepartmentShortName' => 'IT',
            'DepartmentCode' => 'IT01',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '50', '56')
        ]);

        Department::create([
            'DepartmentName' => 'Accounts',
            'DepartmentShortName' => 'Accounts',
            'DepartmentCode' => 'ACCNT01',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '51', '26')
        ]);

        Department::create([
            'DepartmentName' => 'ADMIN',
            'DepartmentShortName' => 'Admin',
            'DepartmentCode' => 'ADMN01',
            'CreationDate' => Carbon::create('2023', '09', '01', '11', '35', '50')
        ]);
    }
}
