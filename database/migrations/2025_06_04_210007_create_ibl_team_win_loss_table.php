<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTeamWinLossTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_team_win_loss', function (Blueprint $table) {
            $table->string('year', 75)->default('0');
            $table->string('currentname', 16)->default('');
            $table->string('namethatyear', 40);
            $table->string('wins', 75)->default('0');
            $table->string('losses', 75)->default('0');
            $table->increments('table_ID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_team_win_loss');
    }
}