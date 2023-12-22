<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            BlockchainSeeder::class,
            AboutSeeder::class,
            PartnerDataSeeder::class,
            PreesaleSeeder::class,
            EcosystemSeeder::class,
            FeatureArieaSeeder::class,
            RoadmapSeeder::class,
            PrivacyPolicySeeder::class,
            TermsAndConditionSeeder::class,
            WhitePaperSeeder::class,
        ]);
    }
}
