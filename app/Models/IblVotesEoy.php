<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblVotesEoy extends Model
{
    protected $table = 'ibl_votes_EOY';
    protected $primaryKey = 'teamid';
    public $timestamps = false;
    protected $fillable = [
        'teamid',
        'team_city',
        'team_name',
        'MVP_1',
        'MVP_2',
        'MVP_3',
        'Six_1',
        'Six_2',
        'Six_3',
        'ROY_1',
        'ROY_2',
        'ROY_3',
        'GM_1',
        'GM_2',
        'GM_3'
    ];
}
