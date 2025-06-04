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
        Schema::create('ibl_plr', function (Blueprint $table) {
            $table->integer('ordinal')->default(0);
            $table->integer('pid')->primary()->default(0);
            $table->string('name', 32)->default('');
            $table->string('nickname', 64)->default('');
            $table->char('age', 2)->default('');
            $table->integer('peak')->default(0);
            $table->integer('tid')->default(0);
            $table->string('teamname', 32)->default('');
            $table->string('pos', 4)->default('');
            $table->integer('sta')->default(0);
            $table->integer('oo')->default(0);
            $table->integer('od')->default(0);
            $table->integer('do')->default(0);
            $table->integer('dd')->default(0);
            $table->integer('po')->default(0);
            $table->integer('pd')->default(0);
            $table->integer('to')->default(0);
            $table->integer('td')->default(0);
            $table->string('Clutch', 32)->default('');
            $table->string('Consistency', 32)->default('');
            $table->integer('PGDepth')->default(0);
            $table->integer('SGDepth')->default(0);
            $table->integer('SFDepth')->default(0);
            $table->integer('PFDepth')->default(0);
            $table->integer('CDepth')->default(0);
            $table->integer('active')->default(0);
            $table->integer('dc_PGDepth')->default(0);
            $table->integer('dc_SGDepth')->default(0);
            $table->integer('dc_SFDepth')->default(0);
            $table->integer('dc_PFDepth')->default(0);
            $table->integer('dc_CDepth')->default(0);
            $table->integer('dc_active')->default(1);
            $table->integer('dc_minutes')->default(0);
            $table->integer('dc_of')->default(0);
            $table->integer('dc_df')->default(0);
            $table->integer('dc_oi')->default(0);
            $table->integer('dc_di')->default(0);
            $table->integer('dc_bh')->default(0);
            $table->integer('stats_gs')->default(0);
            $table->integer('stats_gm')->default(0);
            $table->integer('stats_min')->default(0);
            $table->integer('stats_fgm')->default(0);
            $table->integer('stats_fga')->default(0);
            $table->integer('stats_ftm')->default(0);
            $table->integer('stats_fta')->default(0);
            $table->integer('stats_3gm')->default(0);
            $table->integer('stats_3ga')->default(0);
            $table->integer('stats_orb')->default(0);
            $table->integer('stats_drb')->default(0);
            $table->integer('stats_ast')->default(0);
            $table->integer('stats_stl')->default(0);
            $table->integer('stats_to')->default(0);
            $table->integer('stats_blk')->default(0);
            $table->integer('stats_pf')->default(0);
            $table->integer('talent')->default(0);
            $table->integer('skill')->default(0);
            $table->integer('intangibles')->default(0);
            $table->string('coach', 16)->default('');
            $table->string('loyalty', 16)->default('');
            $table->string('playingTime', 16)->default('');
            $table->string('winner', 16)->default('');
            $table->string('tradition', 16)->default('');
            $table->string('security', 16)->default('');
            $table->integer('exp')->default(0);
            $table->integer('bird')->default(0);
            $table->integer('cy')->default(0);
            $table->integer('cyt')->default(0);
            $table->integer('cy1')->default(0);
            $table->integer('cy2')->default(0);
            $table->integer('cy3')->default(0);
            $table->integer('cy4')->default(0);
            $table->integer('cy5')->default(0);
            $table->integer('cy6')->default(0);
            $table->integer('sh_pts')->default(0);
            $table->integer('sh_reb')->default(0);
            $table->integer('sh_ast')->default(0);
            $table->integer('sh_stl')->default(0);
            $table->integer('sh_blk')->default(0);
            $table->integer('s_dd')->default(0);
            $table->integer('s_td')->default(0);
            $table->integer('sp_pts')->default(0);
            $table->integer('sp_reb')->default(0);
            $table->integer('sp_ast')->default(0);
            $table->integer('sp_stl')->default(0);
            $table->integer('sp_blk')->default(0);
            $table->integer('ch_pts')->default(0);
            $table->integer('ch_reb')->default(0);
            $table->integer('ch_ast')->default(0);
            $table->integer('ch_stl')->default(0);
            $table->integer('ch_blk')->default(0);
            $table->integer('c_dd')->default(0);
            $table->integer('c_td')->default(0);
            $table->integer('cp_pts')->default(0);
            $table->integer('cp_reb')->default(0);
            $table->integer('cp_ast')->default(0);
            $table->integer('cp_stl')->default(0);
            $table->integer('cp_blk')->default(0);
            $table->integer('car_gm')->default(0);
            $table->integer('car_min')->default(0);
            $table->integer('car_fgm')->default(0);
            $table->integer('car_fga')->default(0);
            $table->integer('car_ftm')->default(0);
            $table->integer('car_fta')->default(0);
            $table->integer('car_tgm')->default(0);
            $table->integer('car_tga')->default(0);
            $table->integer('car_orb')->default(0);
            $table->integer('car_drb')->default(0);
            $table->integer('car_reb')->default(0);
            $table->integer('car_ast')->default(0);
            $table->integer('car_stl')->default(0);
            $table->integer('car_to')->default(0);
            $table->integer('car_blk')->default(0);
            $table->integer('car_pf')->default(0);
            $table->integer('car_pts')->default(0);
            $table->integer('r_fga')->default(0);
            $table->integer('r_fgp')->default(0);
            $table->integer('r_fta')->default(0);
            $table->integer('r_ftp')->default(0);
            $table->integer('r_tga')->default(0);
            $table->integer('r_tgp')->default(0);
            $table->integer('r_orb')->default(0);
            $table->integer('r_drb')->default(0);
            $table->integer('r_ast')->default(0);
            $table->integer('r_stl')->default(0);
            $table->integer('r_to')->default(0);
            $table->integer('r_blk')->default(0);
            $table->integer('r_foul')->default(0);
            $table->integer('draftround')->default(0);
            $table->string('draftedby', 32)->default('');
            $table->string('draftedbycurrentname', 32)->default('');
            $table->integer('draftyear')->default(0);
            $table->integer('draftpickno')->default(0);
            $table->integer('injured')->default(0);
            $table->string('htft', 8)->default('');
            $table->string('htin', 8)->default('');
            $table->string('wt', 8)->default('');
            $table->smallInteger('retired')->default(0);
            $table->string('college', 48)->default('');
            $table->integer('car_playoff_min')->default(0);
            $table->integer('car_preseason_min')->default(0);
            $table->integer('droptime')->default(0);
            $table->integer('temp')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibl_plr');
    }
};
