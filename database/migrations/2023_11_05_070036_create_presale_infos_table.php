<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presale_infos', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('text');
            $table->string('image');
            $table->string('pre_sale');
            $table->string('bounties');
            $table->string('liquidity_pool');
            $table->string('team');
            $table->string('advisors');
            $table->string('marketing_and_bd');
            $table->string('pre_seed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presale_infos');
    }
};
