<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntryLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entry_logs')->insert([
            [
                'id' => '1',
                'employee_id' => '1',
                'log_time' => now()->subDays(4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'employee_id' => '1',
                'log_time' => now()->subDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'employee_id' => '2',
                'log_time' => now()->subDays(600),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
