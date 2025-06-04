<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPlayoffStat extends Model
{
    protected $table = 'ibl_playoff_stats';
    public $timestamps = false;

    protected $fillable = [
        'year', 'pos', 'name', 'team', 'games', 'minutes', 'fgm', 'fga', 'ftm', 'fta',
        'tgm', 'tga', 'orb', 'reb', 'ast', 'stl', 'tvr', 'blk', 'pf'
    ];
}
