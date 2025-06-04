<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ibl_schedule', function (Blueprint $table) {
            $table->year('Year')->default(0000);
            $table->integer('BoxID')->default(0);
            $table->date('Date');
            $table->integer('Visitor')->default(0);
            $table->integer('VScore')->default(0);
            $table->integer('Home')->default(0);
            $table->integer('HScore')->default(0);
            $table->increments('SchedID');
            $table->index('BoxID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_schedule');
    }
};
