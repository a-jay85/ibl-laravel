<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTeamAwardsTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_team_awards', function (Blueprint $table) {
            $table->string('year', 35);
            $table->string('name', 35);
            $table->string('Award', 350);
            $table->integer('ID')->primary();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_team_awards');
    }
}