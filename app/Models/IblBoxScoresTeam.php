<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblBoxScoresTeam extends Model
{
    protected $table = 'ibl_box_scores_teams';
    public $timestamps = false;

    protected $fillable = [
        'Date',
        'name',
        'gameOfThatDay',
        'visitorTeamID',
        'homeTeamID',
        'attendance',
        'capacity',
        'visitorWins',
        'visitorLosses',
        'homeWins',
        'homeLosses',
        'visitorQ1points',
        'visitorQ2points',
        'visitorQ3points',
        'visitorQ4points',
        'visitorOTpoints',
        'homeQ1points',
        'homeQ2points',
        'homeQ3points',
        'homeQ4points',
        'homeOTpoints',
        'gameMIN',
        'gameFGM',
        'gameFGA',
        'gameFTM',
        'gameFTA',
        'game3GM',
        'game3GA',
        'gameORB',
        'gameDRB',
        'gameAST',
        'gameSTL',
        'gameTOV',
        'gameBLK',
        'gamePF',
    ];
}
