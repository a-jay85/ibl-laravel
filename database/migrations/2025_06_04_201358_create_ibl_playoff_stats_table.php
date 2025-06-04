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
        Schema::create('ibl_playoff_stats', function (Blueprint $table) {
            $table->integer('year')->default(0);
            $table->char('pos', 2)->default('');
            $table->string('name', 32)->default('');
            $table->string('team', 32)->default('');
            $table->integer('games')->default(0);
            $table->integer('minutes')->default(0);
            $table->integer('fgm')->default(0);
            $table->integer('fga')->default(0);
            $table->integer('ftm')->default(0);
            $table->integer('fta')->default(0);
            $table->integer('tgm')->default(0);
            $table->integer('tga')->default(0);
            $table->integer('orb')->default(0);
            $table->integer('reb')->default(0);
            $table->integer('ast')->default(0);
            $table->integer('stl')->default(0);
            $table->integer('tvr')->default(0);
            $table->integer('blk')->default(0);
            $table->integer('pf')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_playoff_stats');
    }
};
