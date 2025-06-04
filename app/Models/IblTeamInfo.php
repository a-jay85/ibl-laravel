<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTeamInfo extends Model
{
    protected $table = 'ibl_team_info';
    protected $primaryKey = 'teamid';
    public $timestamps = false;
    protected $fillable = [
        'teamid',
        'team_city',
        'team_name',
        'color1',
        'color2',
        'arena',
        'owner_name',
        'owner_email',
        'discordID',
        'skype',
        'aim',
        'msn',
        'formerly_known_as',
        'Contract_Wins',
        'Contract_Losses',
        'Contract_AvgW',
        'Contract_AvgL',
        'Contract_Coach',
        'Used_Extension_This_Chunk',
        'Used_Extension_This_Season',
        'HasMLE',
        'HasLLE',
        'chart'
    ];
}
