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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('subs_category_id')->references('id')->on('subs_categories');
            $table->foreignId('address_id')->references('id')->on('addresses');
            $table->double('discounted_price');
            $table->enum('status', ['pending', 'success', 'failed']);
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
