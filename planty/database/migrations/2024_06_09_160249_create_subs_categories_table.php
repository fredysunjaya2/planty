<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subs_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignid('subs_tier_id')->references('id')->on('subs_tiers');
            $table->integer('months');
            $table->double('price');
            $table->double('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subs_categories');
    }
};
