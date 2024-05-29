<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'UserName' => 'admin',
            'Password' => '5c428d8875d2948607f3e3fe134d71b4',
            'updationDate' => Carbon::create('2023', '08', '31', '11', '42', '58')
        ]);
    }
}
