<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblHist extends Model
{
    protected $table = 'ibl_hist';
    protected $primaryKey = 'nuke_iblhist';
    public $timestamps = false;

    protected $fillable = [
        'pid', 'year', 'team', 'teamid', 'gm', 'min', 'fgm', 'fga', 'ftm', 'fta', '3gm', '3ga',
        'orb', 'reb', 'ast', 'stl', 'blk', 'tvr', 'pf', 'name', 'r_2ga', 'r_2gp', 'r_fta', 'r_ftp',
        'r_3ga', 'r_3gp', 'r_orb', 'r_drb', 'r_ast', 'r_stl', 'r_blk', 'r_tvr', 'r_oo', 'r_do',
        'r_po', 'r_to', 'r_od', 'r_dd', 'r_pd', 'r_td', 'salary'
    ];
}
