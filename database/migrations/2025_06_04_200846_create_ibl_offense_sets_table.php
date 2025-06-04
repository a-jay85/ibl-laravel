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
        Schema::create('ibl_offense_sets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('reveal')->default(0);
            $table->string('offense_name', 32)->default('');
            $table->string('TeamName', 32)->default('');
            $table->integer('SetNumber')->default(0);
            $table->string('PG_Depth_Name', 32)->default('');
            $table->string('SG_Depth_Name', 32)->default('');
            $table->string('SF_Depth_Name', 32)->default('');
            $table->string('PF_Depth_Name', 32)->default('');
            $table->string('C_Depth_Name', 32)->default('');
            $table->integer('PG_Low_Range')->default(0);
            $table->integer('PG_High_Range')->default(0);
            $table->integer('SG_Low_Range')->default(0);
            $table->integer('SG_High_Range')->default(0);
            $table->integer('SF_Low_Range')->default(0);
            $table->integer('SF_High_Range')->default(0);
            $table->integer('PF_Low_Range')->default(0);
            $table->integer('PF_High_Range')->default(0);
            $table->integer('C_Low_Range')->default(0);
            $table->integer('C_High_Range')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_offense_sets');
    }
};
