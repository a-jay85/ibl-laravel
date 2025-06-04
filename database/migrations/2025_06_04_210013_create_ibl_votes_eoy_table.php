<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblVotesEoyTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_votes_EOY', function (Blueprint $table) {
            $table->integer('teamid')->default(0)->primary();
            $table->string('team_city', 24)->default('');
            $table->string('team_name', 16)->default('');
            $table->string('MVP_1', 255)->nullable();
            $table->string('MVP_2', 255)->nullable();
            $table->string('MVP_3', 255)->nullable();
            $table->string('Six_1', 255)->nullable();
            $table->string('Six_2', 255)->nullable();
            $table->string('Six_3', 255)->nullable();
            $table->string('ROY_1', 255)->nullable();
            $table->string('ROY_2', 255)->nullable();
            $table->string('ROY_3', 255)->nullable();
            $table->string('GM_1', 255)->nullable();
            $table->string('GM_2', 255)->nullable();
            $table->string('GM_3', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_votes_EOY');
    }
}