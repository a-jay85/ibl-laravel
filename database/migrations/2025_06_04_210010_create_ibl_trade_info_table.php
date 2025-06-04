<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTradeInfoTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_trade_info', function (Blueprint $table) {
            $table->integer('tradeofferid')->default(0);
            $table->integer('itemid')->default(0);
            $table->string('itemtype', 128)->default('');
            $table->string('from', 128)->default('');
            $table->string('to', 128)->default('');
            $table->string('approval', 128)->default('');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_trade_info');
    }
}