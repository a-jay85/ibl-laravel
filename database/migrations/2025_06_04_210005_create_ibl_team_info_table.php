<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTeamInfoTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_team_info', function (Blueprint $table) {
            $table->integer('teamid')->default(0)->primary();
            $table->string('team_city', 24)->default('');
            $table->string('team_name', 16)->default('');
            $table->string('color1', 6)->default('');
            $table->string('color2', 6)->default('');
            $table->string('arena', 255)->default('');
            $table->string('owner_name', 32)->default('');
            $table->string('owner_email', 48)->default('');
            $table->unsignedBigInteger('discordID')->nullable();
            $table->string('skype', 16);
            $table->string('aim', 48)->default('');
            $table->string('msn', 48)->default('');
            $table->string('formerly_known_as', 255)->nullable();
            $table->integer('Contract_Wins')->default(0);
            $table->integer('Contract_Losses')->default(0);
            $table->integer('Contract_AvgW')->default(0);
            $table->integer('Contract_AvgL')->default(0);
            $table->decimal('Contract_Coach', 3, 2)->default(0.00);
            $table->integer('Used_Extension_This_Chunk')->default(0);
            $table->integer('Used_Extension_This_Season')->nullable()->default(0);
            $table->integer('HasMLE')->default(0);
            $table->integer('HasLLE')->default(0);
            $table->char('chart', 2)->default('');
            $table->index('team_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_team_info');
    }
}