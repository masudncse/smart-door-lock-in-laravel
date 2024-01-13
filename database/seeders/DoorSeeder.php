<?php

namespace Database\Seeders;

use App\Models\Door;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doors')->insert([
            [
                'id' => '1',
                'title' => 'Door 01',
                'description' => 'Description 01',
                'device_id' => '1',
                'status' => Door::STATUS_OPEN,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'title' => 'Door 02',
                'description' => 'Description 02',
                'device_id' => '2',
                'status' => Door::STATUS_CLOSE,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
