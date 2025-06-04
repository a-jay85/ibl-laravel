<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTeamHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_team_history', function (Blueprint $table) {
            $table->integer('teamid')->default(0)->primary();
            $table->string('team_city', 24)->default('');
            $table->string('team_name', 16)->default('');
            $table->string('color1', 6)->default('');
            $table->string('color2', 6)->default('');
            $table->string('depth', 100);
            $table->string('sim_depth', 100);
            $table->string('asg_vote', 100);
            $table->string('eoy_vote', 100);
            $table->integer('totwins');
            $table->integer('totloss');
            $table->float('winpct', 4, 3);
            $table->integer('playoffs');
            $table->integer('div_titles');
            $table->integer('conf_titles');
            $table->integer('ibl_titles');
            $table->integer('heat_titles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_team_history');
    }
}