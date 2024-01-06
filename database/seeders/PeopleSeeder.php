<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            [
                'id' => '1',
                'name' => 'Md. Masudul Kabir',
                'email' => 'masud.ncse@gmail.com',
                'designation' => 'Sr. Software Engineer',
                'address' => 'Nawabpur Road',
                'phone' => '01676717945',
                'image' => 'uploads/masud.png',
                'status' => People::STATUS_ACTIVATED,
            ],
            [
                'id' => '2',
                'name' => 'Kawsar Ibn Siraj',
                'email' => 'kawsar8001@gmail.com',
                'designation' => 'Frontend Engineer',
                'address' => 'Moammadpur Road',
                'phone' => '01712548889',
                'image' => 'uploads/kawsar.png',
                'status' => People::STATUS_DEACTIVATED,
            ]
        ]);
    }
}
