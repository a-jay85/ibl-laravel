<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblStandingsTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_standings', function (Blueprint $table) {
            $table->unsignedInteger('tid')->primary();
            $table->string('team_name', 16)->default('');
            $table->float('pct', 4, 3)->unsigned()->nullable();
            $table->string('leagueRecord', 5)->default('');
            $table->string('conference', 7)->default('');
            $table->string('confRecord', 5)->default('');
            $table->decimal('confGB', 3, 1)->nullable();
            $table->string('division', 16)->default('');
            $table->string('divRecord', 5)->default('');
            $table->decimal('divGB', 3, 1)->nullable();
            $table->string('homeRecord', 5)->default('');
            $table->string('awayRecord', 5)->default('');
            $table->unsignedInteger('gamesUnplayed')->nullable();
            $table->unsignedInteger('confWins')->nullable();
            $table->unsignedInteger('confLosses')->nullable();
            $table->unsignedInteger('divWins')->nullable();
            $table->unsignedInteger('divLosses')->nullable();
            $table->unsignedInteger('homeWins')->nullable();
            $table->unsignedInteger('homeLosses')->nullable();
            $table->unsignedInteger('awayWins')->nullable();
            $table->unsignedInteger('awayLosses')->nullable();
            $table->integer('confMagicNumber')->nullable();
            $table->integer('divMagicNumber')->nullable();
            $table->tinyInteger('clinchedConference')->nullable();
            $table->tinyInteger('clinchedDivision')->nullable();
            $table->tinyInteger('clinchedPlayoffs')->nullable();
            $table->index('team_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_standings');
    }
}