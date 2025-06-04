<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTradeCashTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_trade_cash', function (Blueprint $table) {
            $table->integer('tradeOfferID');
            $table->string('sendingTeam', 16)->default('');
            $table->string('receivingTeam', 16)->default('');
            $table->integer('cy1')->nullable();
            $table->integer('cy2')->nullable();
            $table->integer('cy3')->nullable();
            $table->integer('cy4')->nullable();
            $table->integer('cy5')->nullable();
            $table->integer('cy6')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_trade_cash');
    }
}