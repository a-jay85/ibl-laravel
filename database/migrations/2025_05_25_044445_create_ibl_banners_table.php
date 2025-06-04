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
        Schema::create('ibl_banners', function (Blueprint $table) {
            $table->integer('year')->default(0);
            $table->string('currentname');
            $table->string('bannername');
            $table->integer('bannertype')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_banners');
    }
};
