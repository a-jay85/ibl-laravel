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
        Schema::create('box_scores', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(FALSE);
            $table->string('player_name');
            $table->string('position')->default('');
            $table->integer('player_id');
            $table->integer('visitor_team_id');
            $table->integer('home_team_id');
            $table->integer('minutes_played');
            $table->integer('field_goals_made');
            $table->integer('field_goals_attempted');
            $table->integer('free_throws_made');
            $table->integer('free_throws_attempted');
            $table->integer('three_pointers_made');
            $table->integer('three_pointers_attempted');
            $table->integer('offensive_rebounds');
            $table->integer('defensive_rebounds');
            $table->integer('assists');
            $table->integer('steals');
            $table->integer('turnovers');
            $table->integer('blocks');
            $table->integer('personal_fouls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('box_scores');
    }
};
