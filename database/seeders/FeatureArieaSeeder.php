<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureArieaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feature_arieas')->insert([
            [
                'heading' => 'Powerful Technology',
                'text' => 'A versatile framework combining Ethereum-based technology with powerful tools and applications.',
                'icon' => 'assets/frontend/images/icon/features-icon-3.png',
                'created_at' => Carbon::now()
            ],
            [
                'heading' => 'Provably Fair',
                'text' => 'A versatile framework combining Ethereum-based technology with powerful tools and applications.',
                'icon' => 'assets/frontend/images/icon/features-icon-3.png',
                'created_at' => Carbon::now()
            ],
            [
                'heading' => 'Trusted Globally',
                'text' => 'A versatile framework combining Ethereum-based technology with powerful tools and applications.',
                'icon' => 'assets/frontend/images/icon/features-icon-3.png',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
