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
        Schema::create('ibl_demands', function (Blueprint $table) {
            $table->string('name', 32)->default('');
            $table->integer('dem1')->default(0);
            $table->integer('dem2')->default(0);
            $table->integer('dem3')->default(0);
            $table->integer('dem4')->default(0);
            $table->integer('dem5')->default(0);
            $table->integer('dem6')->default(0);
            $table->primary('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_demands');
    }
};
