<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPlr extends Model
{
    protected $table = 'ibl_plr';
    protected $primaryKey = 'pid';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ordinal', 'pid', 'name', 'nickname', 'age', 'peak', 'tid', 'teamname', 'pos', 'sta', 'oo', 'od', 'do', 'dd',
        'po', 'pd', 'to', 'td', 'Clutch', 'Consistency', 'PGDepth', 'SGDepth', 'SFDepth', 'PFDepth', 'CDepth', 'active',
        'dc_PGDepth', 'dc_SGDepth', 'dc_SFDepth', 'dc_PFDepth', 'dc_CDepth', 'dc_active', 'dc_minutes', 'dc_of', 'dc_df',
        'dc_oi', 'dc_di', 'dc_bh', 'stats_gs', 'stats_gm', 'stats_min', 'stats_fgm', 'stats_fga', 'stats_ftm', 'stats_fta',
        'stats_3gm', 'stats_3ga', 'stats_orb', 'stats_drb', 'stats_ast', 'stats_stl', 'stats_to', 'stats_blk', 'stats_pf',
        'talent', 'skill', 'intangibles', 'coach', 'loyalty', 'playingTime', 'winner', 'tradition', 'security', 'exp',
        'bird', 'cy', 'cyt', 'cy1', 'cy2', 'cy3', 'cy4', 'cy5', 'cy6', 'sh_pts', 'sh_reb', 'sh_ast', 'sh_stl', 'sh_blk',
        's_dd', 's_td', 'sp_pts', 'sp_reb', 'sp_ast', 'sp_stl', 'sp_blk', 'ch_pts', 'ch_reb', 'ch_ast', 'ch_stl', 'ch_blk',
        'c_dd', 'c_td', 'cp_pts', 'cp_reb', 'cp_ast', 'cp_stl', 'cp_blk', 'car_gm', 'car_min', 'car_fgm', 'car_fga',
        'car_ftm', 'car_fta', 'car_tgm', 'car_tga', 'car_orb', 'car_drb', 'car_reb', 'car_ast', 'car_stl', 'car_to',
        'car_blk', 'car_pf', 'car_pts', 'r_fga', 'r_fgp', 'r_fta', 'r_ftp', 'r_tga', 'r_tgp', 'r_orb', 'r_drb', 'r_ast',
        'r_stl', 'r_to', 'r_blk', 'r_foul', 'draftround', 'draftedby', 'draftedbycurrentname', 'draftyear', 'draftpickno',
        'injured', 'htft', 'htin', 'wt', 'retired', 'college', 'car_playoff_min', 'car_preseason_min', 'droptime', 'temp'
    ];
}
