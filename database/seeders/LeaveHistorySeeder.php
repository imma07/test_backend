<?php

namespace Database\Seeders;

use App\Models\leaveHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveHistory::Create([
            'user_id' => 1,
            'leave_type_id' => 1,
            'leave_balance' => 15,
        ]);

        LeaveHistory::Create([
            'user_id' => 1,
            'leave_type_id' => 2,
            'leave_balance' => 10,
        ]);

        LeaveHistory::Create([
            'user_id' => 1,
            'leave_type_id' => 3,
            'leave_balance' => 10,
        ]);

        LeaveHistory::Create([
            'user_id' => 2,
            'leave_type_id' => 3,
            'leave_balance' => 7,
        ]);
    }
}
