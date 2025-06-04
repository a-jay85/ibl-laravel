<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblVotesAsg extends Model
{
    protected $table = 'ibl_votes_ASG';
    public $timestamps = false;
    protected $fillable = [
        'teamid',
        'team_city',
        'team_name',
        'East_F1',
        'East_F2',
        'East_F3',
        'East_F4',
        'East_B1',
        'East_B2',
        'East_B3',
        'East_B4',
        'West_F1',
        'West_F2',
        'West_F3',
        'West_F4',
        'West_B1',
        'West_B2',
        'West_B3',
        'West_B4'
    ];
}
