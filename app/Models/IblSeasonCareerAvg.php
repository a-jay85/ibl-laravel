<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblSeasonCareerAvg extends Model
{
    protected $table = 'ibl_season_career_avgs';
    public $timestamps = false;

    protected $fillable = [
        'pid', 'name', 'games', 'minutes', 'fgm', 'fga', 'fgpct', 'ftm', 'fta', 'ftpct',
        'tgm', 'tga', 'tpct', 'orb', 'reb', 'ast', 'stl', 'tvr', 'blk', 'pf', 'pts', 'retired'
    ];
}
