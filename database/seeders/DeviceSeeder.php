<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert([
            [
                'id' => '1',
                'title' => 'Device 01',
                'description' => 'Description 01',
                'status' => Device::STATUS_ONLINE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'title' => 'Device 02',
                'description' => 'Description 02',
                'status' => Device::STATUS_OFFLINE,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
