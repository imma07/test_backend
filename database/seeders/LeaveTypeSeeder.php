<?php

namespace Database\Seeders;

use App\Models\leaveType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveType::Create([
            'name' => 'Annual Leave',
            'description' => 'Annual Leave',
            'eligible_days' => 15,
        ]);

        LeaveType::Create([
            'name' => 'Sick Leave no mc',
            'description' => 'Sick Leave no mc',
            'eligible_days' => 10,
        ]);

        LeaveType::Create([
            'name' => 'Sick Leave with mc',
            'description' => 'Sick Leave with mc',
            'eligible_days' => 10,
        ]);
    }
}
