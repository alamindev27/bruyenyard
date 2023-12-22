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
        Schema::create('sell_coins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('wallet_address');
            $table->string('withdraw_coin_name');
            $table->string('usd_amount');
            $table->double('amount');
            $table->string('trx_id');
            $table->string('payment_type');
            $table->string('payment_history');
            $table->enum('status', array('pending', 'success', 'failed'))->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_coins');
    }
};
