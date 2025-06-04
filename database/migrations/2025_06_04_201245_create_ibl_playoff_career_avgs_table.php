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
        Schema::create('ibl_playoff_career_avgs', function (Blueprint $table) {
            $table->integer('pid')->default(0);
            $table->string('name', 32)->default('');
            $table->integer('games')->default(0);
            $table->decimal('minutes', 8, 2)->default(0.00);
            $table->decimal('fgm', 8, 2);
            $table->decimal('fga', 8, 2);
            $table->decimal('fgpct', 8, 3)->default(0.000);
            $table->decimal('ftm', 8, 2);
            $table->decimal('fta', 8, 2);
            $table->decimal('ftpct', 8, 3)->default(0.000);
            $table->decimal('tgm', 8, 2);
            $table->decimal('tga', 8, 2);
            $table->decimal('tpct', 8, 3)->default(0.000);
            $table->decimal('orb', 8, 2)->default(0.00);
            $table->decimal('reb', 8, 2)->default(0.00);
            $table->decimal('ast', 8, 2)->default(0.00);
            $table->decimal('stl', 8, 2)->default(0.00);
            $table->decimal('tvr', 8, 2)->default(0.00);
            $table->decimal('blk', 8, 2)->default(0.00);
            $table->decimal('pf', 8, 2)->default(0.00);
            $table->decimal('pts', 8, 2)->default(0.00);
            $table->integer('retired')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_playoff_career_avgs');
    }
};
