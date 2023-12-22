<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhitePaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('white_papers')->insert([
            [
                'heading' => 'White Paper',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores obcaecati, quia animi repellat ex sint sequi ab magnam nisi nemo quaerat modi fugiat pariatur dolor saepe nostrum ducimus, voluptatem dignissimos sunt. Commodi assumenda adipisci voluptatem. Corrupti consectetur cum modi quam eveniet voluptate amet, natus tempora! Accusamus quis distinctio magnam optio!',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
