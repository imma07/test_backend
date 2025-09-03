<?php

namespace Database\Seeders;

use App\Models\leaveRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveRequest::create([
            'user_id' => 1,
            'leave_type_id' => 1,
            'start_date' => '2025-01-01',
            'end_date' => '2025-01-15',
            'reason' => 'Annual Leave',
            'status' => 'approved',
        ]);

        LeaveRequest::create([
            'user_id' => 2,
            'leave_type_id' => 2,
            'start_date' => '2025-01-01',
            'end_date' => '2025-01-15',
            'reason' => 'Annual Leave',
            'status' => 'approved',
        ]);

        LeaveRequest::create([
            'user_id' => 2,
            'leave_type_id' => 3,
            'start_date' => '2025-01-01',
            'end_date' => '2025-01-15',
            'reason' => 'Annual Leave',
            'status' => 'approved',
        ]);
    }
}
