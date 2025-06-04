<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTradeAutocounterTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_trade_autocounter', function (Blueprint $table) {
            $table->increments('counter');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_trade_autocounter');
    }
}