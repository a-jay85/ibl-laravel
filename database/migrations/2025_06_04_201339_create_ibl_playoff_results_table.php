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
        Schema::create('ibl_playoff_results', function (Blueprint $table) {
            $table->integer('year')->default(0);
            $table->integer('round')->default(0);
            $table->string('winner', 32)->default('');
            $table->string('loser', 32)->default('');
            $table->integer('loser_games')->default(0);
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_playoff_results');
    }
};
