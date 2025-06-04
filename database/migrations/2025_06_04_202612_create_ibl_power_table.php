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
        Schema::create('ibl_power', function (Blueprint $table) {
            $table->smallInteger('TeamID')->default(0);
            $table->string('Team', 20)->default('');
            $table->string('Division', 20)->default('');
            $table->string('Conference', 20)->default('');
            $table->decimal('ranking', 6, 1)->default(0.0);
            $table->smallInteger('win')->default(0);
            $table->smallInteger('loss')->default(0);
            $table->decimal('gb', 6, 1)->default(0.0);
            $table->integer('conf_win');
            $table->integer('conf_loss');
            $table->integer('div_win');
            $table->integer('div_loss');
            $table->integer('home_win');
            $table->integer('home_loss');
            $table->integer('road_win');
            $table->integer('road_loss');
            $table->integer('last_win');
            $table->integer('last_loss');
            $table->string('streak_type', 1)->default('');
            $table->integer('streak');
            $table->primary('Team');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_power');
    }
};
