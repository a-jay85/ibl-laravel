<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblStanding extends Model
{
    protected $table = 'ibl_standings';
    protected $primaryKey = 'tid';
    public $timestamps = false;
    protected $fillable = [
        'tid',
        'team_name',
        'pct',
        'leagueRecord',
        'conference',
        'confRecord',
        'confGB',
        'division',
        'divRecord',
        'divGB',
        'homeRecord',
        'awayRecord',
        'gamesUnplayed',
        'confWins',
        'confLosses',
        'divWins',
        'divLosses',
        'homeWins',
        'homeLosses',
        'awayWins',
        'awayLosses',
        'confMagicNumber',
        'divMagicNumber',
        'clinchedConference',
        'clinchedDivision',
        'clinchedPlayoffs'
    ];
}
