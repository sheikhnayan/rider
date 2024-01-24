<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'phone' => '07949535507',
            'email' => 'imchauffeur@hotmail.com',
            'address' => '167 Northwestern Avenue Watford, WD25 0AQ',
            'logo' => 'storage/logo-300x40.png.pagespeed.ce.52WH9Uggde.png',
        ]);
    }
}
