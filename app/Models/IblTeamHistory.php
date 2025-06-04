<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTeamHistory extends Model
{
    protected $table = 'ibl_team_history';
    protected $primaryKey = 'teamid';
    public $timestamps = false;
    protected $fillable = [
        'teamid',
        'team_city',
        'team_name',
        'color1',
        'color2',
        'depth',
        'sim_depth',
        'asg_vote',
        'eoy_vote',
        'totwins',
        'totloss',
        'winpct',
        'playoffs',
        'div_titles',
        'conf_titles',
        'ibl_titles',
        'heat_titles'
    ];
}
