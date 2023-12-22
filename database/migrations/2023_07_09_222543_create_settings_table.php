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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('site_favicon');
            $table->float('coin_buy_rate')->default(20);
            $table->string('wallet_address')->default('0x797bb6C4544B0B7ba2609111bb39a650d91dB66F');
            $table->string('wallet_pk')->default('c1c707f795319e9faf008f5454eef4fab6a889dfeec93c2ad4917cfb777bcd53');
            $table->timestamp('take_sale_count')->nullable();
            $table->string('take_sale_count_status')->default('off');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
