<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblPlrChunkTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_plr_chunk', function (Blueprint $table) {
            $table->integer('active')->default(0);
            $table->integer('pid')->default(0);
            $table->integer('ordinal');
            $table->string('name', 32);
            $table->integer('tid')->default(0);
            $table->string('teamname', 32)->default('');
            $table->string('pos', 4);
            $table->string('altpos', 4)->default('');
            $table->integer('stats_gs')->default(0);
            $table->integer('stats_gm')->default(0);
            $table->integer('stats_min')->default(0);
            $table->integer('stats_fgm')->default(0);
            $table->integer('stats_fga')->default(0);
            $table->integer('stats_ftm')->default(0);
            $table->integer('stats_fta')->default(0);
            $table->integer('stats_3gm')->default(0);
            $table->integer('stats_3ga')->default(0);
            $table->integer('stats_orb')->default(0);
            $table->integer('stats_drb')->default(0);
            $table->integer('stats_ast')->default(0);
            $table->integer('stats_stl')->default(0);
            $table->integer('stats_to')->default(0);
            $table->integer('stats_blk')->default(0);
            $table->integer('stats_pf')->default(0);
            $table->integer('chunk')->nullable();
            $table->decimal('qa', 11, 2)->default(0.00);
            $table->integer('Season');
            $table->index('pid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_plr_chunk');
    }
}
