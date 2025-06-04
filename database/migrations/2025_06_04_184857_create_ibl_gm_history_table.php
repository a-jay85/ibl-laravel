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
        Schema::create('ibl_gm_history', function (Blueprint $table) {
            $table->string('year', 35);
            $table->string('name', 50);
            $table->string('Award', 350);
            $table->integer('prim');
            $table->primary('prim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_gm_history');
    }
};
