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
                'people_id' => '1',
                'entry_time' => now()->subDays(4),
                'exit_time' => now()->subDays(4),
            ],
            [
                'id' => '2',
                'people_id' => '1',
                'entry_time' => now()->subDays(5),
                'exit_time' => now()->subDays(6),
            ],
            [
                'id' => '3',
                'people_id' => '2',
                'entry_time' => now()->subDays(600),
                'exit_time' => now()->subDays(601),
            ]
        ]);
    }
}
