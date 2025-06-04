<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblTradeQueueTable extends Migration
{
    public function up()
    {
        Schema::create('ibl_trade_queue', function (Blueprint $table) {
            $table->text('query');
            $table->text('tradeline')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibl_trade_queue');
    }
}