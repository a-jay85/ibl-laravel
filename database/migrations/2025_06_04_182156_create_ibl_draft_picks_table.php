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
        Schema::create('ibl_draft_picks', function (Blueprint $table) {
            $table->increments('pickid');
            $table->string('ownerofpick', 32)->default('');
            $table->string('teampick', 32)->default('');
            $table->string('year', 4)->default('');
            $table->char('round', 1)->default('');
            $table->string('notes', 280)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_draft_picks');
    }
};
