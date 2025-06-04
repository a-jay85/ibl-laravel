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
        Schema::create('ibl_draft_hist', function (Blueprint $table) {
            $table->integer('player_id')->nullable();
            $table->integer('pick_no')->nullable();
            $table->integer('round_no')->nullable();
            $table->integer('year_no');
            $table->text('city_name')->nullable();
            $table->text('team_name')->nullable();
            $table->text('player_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_draft_hist');
    }
};
