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
        Schema::create('ibl_hist', function (Blueprint $table) {
            $table->integer('pid')->default(0);
            $table->integer('year')->default(0);
            $table->string('team', 32)->default('');
            $table->integer('teamid')->default(0);
            $table->integer('gm')->default(0);
            $table->integer('min')->default(0);
            $table->integer('fgm')->default(0);
            $table->integer('fga')->default(0);
            $table->integer('ftm')->default(0);
            $table->integer('fta')->default(0);
            $table->integer('3gm')->default(0);
            $table->integer('3ga')->default(0);
            $table->integer('orb')->default(0);
            $table->integer('reb')->default(0);
            $table->integer('ast')->default(0);
            $table->integer('stl')->default(0);
            $table->integer('blk')->default(0);
            $table->integer('tvr')->default(0);
            $table->integer('pf')->default(0);
            $table->string('name', 32)->default('');
            $table->integer('r_2ga')->default(0);
            $table->integer('r_2gp')->default(0);
            $table->integer('r_fta')->default(0);
            $table->integer('r_ftp')->default(0);
            $table->integer('r_3ga')->default(0);
            $table->integer('r_3gp')->default(0);
            $table->integer('r_orb')->default(0);
            $table->integer('r_drb')->default(0);
            $table->integer('r_ast')->default(0);
            $table->integer('r_stl')->default(0);
            $table->integer('r_blk')->default(0);
            $table->integer('r_tvr')->default(0);
            $table->integer('r_oo')->default(0);
            $table->integer('r_do')->default(0);
            $table->integer('r_po')->default(0);
            $table->integer('r_to')->default(0);
            $table->integer('r_od')->default(0);
            $table->integer('r_dd')->default(0);
            $table->integer('r_pd')->default(0);
            $table->integer('r_td')->default(0);
            $table->integer('salary')->default(0);
            $table->increments('nuke_iblhist');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_hist');
    }
};
