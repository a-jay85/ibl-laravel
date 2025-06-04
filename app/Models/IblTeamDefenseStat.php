<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTeamDefenseStat extends Model
{
    protected $table = 'ibl_team_defense_stats';
    public $timestamps = false;
    protected $fillable = [
        'year',
        'team',
        'games',
        'minutes',
        'fgm',
        'fga',
        'ftm',
        'fta',
        'tgm',
        'tga',
        'orb',
        'reb',
        'ast',
        'stl',
        'tvr',
        'blk',
        'pf'
    ];
}
