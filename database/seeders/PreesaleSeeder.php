<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreesaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('presale_infos')->insert([
            [
                'heading' => 'PreSale',
                'text' => 'Crypten is one of the highly rated secure platfrom for ICO and any type of in hendrerit justo quisque quis rhons exeget semper semlamat lobortis velit estibulum ante ipsum primis in faucibus.',
                'image' => 'assets/default/default-blockchain.png',
                'pre_sale' => '52.02',
                'bounties' => '20.02',
                'liquidity_pool' => '45.02',
                'team' => '62.02',
                'advisors' => '2.02',
                'marketing_and_bd' => '62.02',
                'pre_seed' => '6.02',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
