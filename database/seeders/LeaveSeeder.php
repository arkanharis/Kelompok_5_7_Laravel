<?php

namespace Database\Seeders;

use App\Models\Leave;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Leave::create([
            'LeaveType' => 'Casual Leaves',
            'ToDate' => '17/09/2023',
            'FromDate' => '10/09/2023',
            'Description' => 'I need leave to visit my home town.',
            'PostingDate' => Carbon::create('2023', '08', '31', '15', '06', '21'),
            'AdminRemark' => 'Approved',
            'AdminRemarkDate' => '2023-08-31 20:39:40',
            'Status' => 1,
            'IsRead' => 1,
            'empid' => 1 // ganti string menjadi integer dengan nilai id yang sesuai dari tabel employees
        ]);

        Leave::create([
            'LeaveType' => 'Casual Leaves',
            'ToDate' => '15/09/2023',
            'FromDate' => '09/09/2023',
            'Description' => 'Need casual leaves for some personal work.',
            'PostingDate' => Carbon::create('2023', '09', '01', '11', '42', '40'),
            'AdminRemark' => 'Leave approved',
            'AdminRemarkDate' => '2023-09-01 17:13:20',
            'Status' => 1,
            'IsRead' => 1,
            'empid' => 2 // ganti string menjadi integer dengan nilai id yang sesuai dari tabel employees
        ]);
    }
}
