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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->string("user_id");
            $table->string("crypto_coin")->nullable();
            $table->string("coin_amount");
            $table->string("amount");
            $table->string("payment_address");
            $table->string("trx_id");
            $table->string("payment_type");
            $table->string("payment_history")->nullable();
            $table->tinyInteger("status")->default(0)->comment("0 = pending, 1 = success");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
