<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveType::create([
            'LeaveType' => 'Casual Leaves',
            'Description' => 'Casual Leaves',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '52', '22')
        ]);

        LeaveType::create([
            'LeaveType' => 'Earned Leaves',
            'Description' => 'Earned Leaves',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '52', '49')
        ]);

        LeaveType::create([
            'LeaveType' => 'Sick Leaves',
            'Description' => 'Sick Leaves',
            'CreationDate' => Carbon::create('2023', '08', '31', '14', '53', '15')
        ]);

        LeaveType::create([
            'LeaveType' => 'RH (Restricted Leaves)',
            'Description' => 'Restricted Leaves',
            'CreationDate' => Carbon::create('2023', '09', '01', '11', '37', '06')
        ]);
    }
}
