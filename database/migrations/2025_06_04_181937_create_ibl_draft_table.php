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
        Schema::create('ibl_draft', function (Blueprint $table) {
            $table->increments('draft_id');
            $table->integer('year')->default(0);
            $table->string('team', 255)->default('');
            $table->string('player', 255)->default('');
            $table->integer('round')->default(0);
            $table->integer('pick')->default(0);
            $table->dateTime('date')->nullable();
            $table->unique('draft_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_draft');
    }
};
