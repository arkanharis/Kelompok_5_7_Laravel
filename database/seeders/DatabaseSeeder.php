<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\LeaveSeeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\DepartmenSeeder;
use Database\Seeders\LeaveTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdminSeeder::class,
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            LeaveSeeder::class,
            LeaveTypeSeeder::class,
        ]);
    }
}
