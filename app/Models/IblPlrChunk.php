<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPlrChunk extends Model
{
    protected $table = 'ibl_plr_chunk';
    public $timestamps = false;
    protected $fillable = [
        'active',
        'pid',
        'ordinal',
        'name',
        'tid',
        'teamname',
        'pos',
        'altpos',
        'stats_gs',
        'stats_gm',
        'stats_min',
        'stats_fgm',
        'stats_fga',
        'stats_ftm',
        'stats_fta',
        'stats_3gm',
        'stats_3ga',
        'stats_orb',
        'stats_drb',
        'stats_ast',
        'stats_stl',
        'stats_to',
        'stats_blk',
        'stats_pf',
        'chunk',
        'qa',
        'Season'
    ];
}
