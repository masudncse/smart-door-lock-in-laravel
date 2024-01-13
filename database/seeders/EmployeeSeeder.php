<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'id' => '1',
                'name' => 'Md. Masudul Kabir',
                'email' => 'masud.ncse@gmail.com',
                'designation' => 'Sr. Software Engineer',
                'address' => 'Nawabpur Road',
                'phone' => '01676717945',
                'image' => 'uploads/masud.png',
                'status' => Employee::STATUS_ACTIVE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'name' => 'Kawsar Ibn Siraj',
                'email' => 'kawsar8001@gmail.com',
                'designation' => 'Frontend Engineer',
                'address' => 'Moammadpur Road',
                'phone' => '01712548889',
                'image' => 'uploads/kawsar.png',
                'status' => Employee::STATUS_INACTIVE,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
