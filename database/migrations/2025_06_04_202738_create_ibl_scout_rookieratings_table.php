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
        Schema::create('ibl_scout_rookieratings', function (Blueprint $table) {
            $table->string('name', 32)->default('');
            $table->char('pos', 2)->default('');
            $table->integer('age')->default(0);
            $table->string('team', 128)->default('');
            $table->integer('fga')->default(0);
            $table->integer('fgp')->default(0);
            $table->integer('fta')->default(0);
            $table->integer('ftp')->default(0);
            $table->integer('tga')->default(0);
            $table->integer('tgp')->default(0);
            $table->integer('orb')->default(0);
            $table->integer('drb')->default(0);
            $table->integer('ast')->default(0);
            $table->integer('stl')->default(0);
            $table->integer('tvr')->default(0);
            $table->integer('blk')->default(0);
            $table->integer('offo')->default(0);
            $table->integer('offd')->default(0);
            $table->integer('offp')->default(0);
            $table->integer('offt')->default(0);
            $table->integer('defo')->default(0);
            $table->integer('defd')->default(0);
            $table->integer('defp')->default(0);
            $table->integer('deft')->default(0);
            $table->integer('tal')->default(0);
            $table->integer('skl')->default(0);
            $table->integer('int')->default(0);
            $table->float('ranking')->default(0);
            $table->text('invite');
            $table->integer('drafted')->default(0);
            $table->integer('sta')->default(0);
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_scout_rookieratings');
    }
};
