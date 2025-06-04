<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTeamWinLoss extends Model
{
    protected $table = 'ibl_team_win_loss';
    protected $primaryKey = 'table_ID';
    public $timestamps = false;
    protected $fillable = [
        'year',
        'currentname',
        'namethatyear',
        'wins',
        'losses',
        'table_ID'
    ];
}
