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
        Schema::create('ibl_one_on_one', function (Blueprint $table) {
            $table->integer('gameid')->primary();
            $table->text('playbyplay');
            $table->string('winner', 32)->default('');
            $table->string('loser', 32)->default('');
            $table->integer('winscore')->default(0);
            $table->integer('lossscore')->default(0);
            $table->string('owner', 25)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_one_on_one');
    }
};
