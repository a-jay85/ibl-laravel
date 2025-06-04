<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblHeatCareerTotal extends Model
{
    protected $table = 'ibl_heat_career_totals';
    public $timestamps = false;

    protected $fillable = [
        'pid',
        'name',
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
        'pf',
        'pts',
        'retired',
    ];
}
