<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'author_name' => 'Admin',
                'site_name' => 'My Site Name',
                'site_logo' => 'assets/default/default-logo.png',
                'site_favicon' => 'assets/default/default-favicon.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
