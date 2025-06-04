<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblVotesAsgTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_votes_ASG', function (Blueprint $table) {
            $table->integer('teamid')->default(0);
            $table->string('team_city', 24)->default('');
            $table->string('team_name', 16)->default('');
            $table->string('East_F1', 255)->nullable();
            $table->string('East_F2', 255)->nullable();
            $table->string('East_F3', 255)->nullable();
            $table->string('East_F4', 255)->nullable();
            $table->string('East_B1', 255)->nullable();
            $table->string('East_B2', 255)->nullable();
            $table->string('East_B3', 255)->nullable();
            $table->string('East_B4', 255)->nullable();
            $table->string('West_F1', 255)->nullable();
            $table->string('West_F2', 255)->nullable();
            $table->string('West_F3', 255)->nullable();
            $table->string('West_F4', 255)->nullable();
            $table->string('West_B1', 255)->nullable();
            $table->string('West_B2', 255)->nullable();
            $table->string('West_B3', 255)->nullable();
            $table->string('West_B4', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_votes_ASG');
    }
}