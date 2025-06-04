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
        Schema::create('ibl_heat_win_loss', function (Blueprint $table) {
            $table->integer('year')->default(0);
            $table->string('currentname', 16)->default('');
            $table->string('namethatyear', 16)->default('');
            $table->integer('wins')->default(0);
            $table->integer('losses')->default(0);
            $table->increments('table_ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_heat_win_loss');
    }
};
