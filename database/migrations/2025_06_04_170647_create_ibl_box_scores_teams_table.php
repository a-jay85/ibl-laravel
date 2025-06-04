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
        Schema::create('ibl_box_scores_teams', function (Blueprint $table) {
            $table->date('Date');
            $table->string('name', 16)->default('');
            $table->integer('gameOfThatDay')->nullable();
            $table->integer('visitorTeamID')->nullable();
            $table->integer('homeTeamID')->nullable();
            $table->integer('attendance')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('visitorWins')->nullable();
            $table->integer('visitorLosses')->nullable();
            $table->integer('homeWins')->nullable();
            $table->integer('homeLosses')->nullable();
            $table->integer('visitorQ1points')->nullable();
            $table->integer('visitorQ2points')->nullable();
            $table->integer('visitorQ3points')->nullable();
            $table->integer('visitorQ4points')->nullable();
            $table->integer('visitorOTpoints')->nullable();
            $table->integer('homeQ1points')->nullable();
            $table->integer('homeQ2points')->nullable();
            $table->integer('homeQ3points')->nullable();
            $table->integer('homeQ4points')->nullable();
            $table->integer('homeOTpoints')->nullable();
            $table->integer('gameMIN')->nullable();
            $table->integer('gameFGM')->nullable();
            $table->integer('gameFGA')->nullable();
            $table->integer('gameFTM')->nullable();
            $table->integer('gameFTA')->nullable();
            $table->integer('game3GM')->nullable();
            $table->integer('game3GA')->nullable();
            $table->integer('gameORB')->nullable();
            $table->integer('gameDRB')->nullable();
            $table->integer('gameAST')->nullable();
            $table->integer('gameSTL')->nullable();
            $table->integer('gameTOV')->nullable();
            $table->integer('gameBLK')->nullable();
            $table->integer('gamePF')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_box_scores_teams');
    }
};
