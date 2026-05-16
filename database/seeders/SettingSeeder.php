<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id' => 1], [
            'address' => 'Address1',
            'phone' => '5523654789',
            'email' => 'khaled@info.com',
            'facebook' => 'khaledabdurahman',
            'linkedin' => 'khaledabdurahman',
            'twitter' => 'khaledabdurahman',
            'instagram' => 'khaledabdurahman',
            'youtube' => 'khaledabdurahman',
        ]);
    }
}
