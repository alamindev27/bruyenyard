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
        Schema::create('crypto_wallets', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("coin");
            $table->string("contract_address")->nullable();
            $table->string("address");
            $table->string("pk");
            $table->string("balance")->nullable();
            $table->tinyInteger("status")->default(0)->comment("0 = not use, 1 = use, 2 = hold, 3 = complete, 4 = used, 5 = net token has");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_wallets');
    }
};
