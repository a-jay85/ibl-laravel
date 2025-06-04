<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPlayoffCareerTotal extends Model
{
    protected $table = 'ibl_playoff_career_totals';
    public $timestamps = false;

    protected $fillable = [
        'pid', 'name', 'games', 'minutes', 'fgm', 'fga', 'ftm', 'fta', 'tgm', 'tga',
        'orb', 'reb', 'ast', 'stl', 'tvr', 'blk', 'pf', 'pts', 'retired'
    ];
}
