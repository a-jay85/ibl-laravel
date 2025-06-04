<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblOlympicsStat extends Model
{
    protected $table = 'ibl_olympics_stats';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'year', 'pos', 'name', 'team', 'games', 'minutes', 'fgm', 'fga', 'ftm', 'fta',
        'tgm', 'tga', 'orb', 'reb', 'ast', 'stl', 'tvr', 'blk', 'pf'
    ];
}
