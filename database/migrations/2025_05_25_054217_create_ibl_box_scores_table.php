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
        Schema::create('ibl_box_scores', function (Blueprint $table) {
            $table->date('Date');
            $table->string('name')->default('');
            $table->string('pos', 2)->default('');
            $table->integer('pid')->nullable();
            $table->integer('visitorTID')->nullable();
            $table->integer('homeTID')->nullable();
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
        Schema::dropIfExists('ibl_box_scores');
    }
};
