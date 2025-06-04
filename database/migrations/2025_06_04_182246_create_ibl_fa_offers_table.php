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
        Schema::create('ibl_fa_offers', function (Blueprint $table) {
            $table->string('name', 32)->default('');
            $table->string('team', 32)->default('');
            $table->integer('offer1')->default(0);
            $table->integer('offer2')->default(0);
            $table->integer('offer3')->default(0);
            $table->integer('offer4')->default(0);
            $table->integer('offer5')->default(0);
            $table->integer('offer6')->default(0);
            $table->float('modifier')->default(0);
            $table->float('random')->default(0);
            $table->float('perceivedvalue')->default(0);
            $table->integer('MLE')->default(0);
            $table->integer('LLE')->default(0);
            $table->increments('primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_fa_offers');
    }
};
