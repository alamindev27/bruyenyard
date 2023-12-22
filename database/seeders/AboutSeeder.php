<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'heading' => 'About',
                'text' => 'Crypten is one of the highly rated secure platfrom for ICO and any type of in hendrerit justo quisque quis rhons exeget semper semlamat lobortis velit estibulum ante ipsum primis in faucibus.',
                'image' => 'assets/default/default-blockchain.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}