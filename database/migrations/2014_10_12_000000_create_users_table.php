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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('profile_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('assets/default/avatar.png');
            $table->enum('role', array('admin', 'user'))->default('user');
            $table->enum('status', array('unblocked', 'blocked'))->default('unblocked');
            $table->float('balance')->default(0);
            $table->float('mining_amount')->default(0);
            $table->float('mining_bonus_amount')->default(0);
            $table->string('free')->default('free');
            $table->timestamp('count')->nullable();

            $table->float('first_gen_toaal_invite')->default(0);
            $table->float('second_gen_toaal_invite')->default(0);
            $table->float('third_gen_toaal_invite')->default(0);

            $table->float('first_gen_buy_presale')->default(0);
            $table->float('second_gen_buy_presale')->default(0);
            $table->float('third_gen_buy_presale')->default(0);

            $table->float('first_gen_commission_amount')->default(0);
            $table->float('second_gen_commission_amount')->default(0);
            $table->float('third_gen_commission_amount')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }


    
};
