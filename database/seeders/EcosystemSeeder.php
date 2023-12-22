<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcosystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ecosystems')->insert([
            [
                'heading' => 'Ecosystem',
                'text' => 'Crypten is one of the highly rated secure platfrom for ICO and any type of in hendrerit justo quisque quis rhons exeget semper semlamat lobortis velit estibulum ante ipsum primis in faucibus.',
                'file' => 'assets/default/default.pdf',
                'image' => 'assets/default/default-blockchain.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
