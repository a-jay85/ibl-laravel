<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPower extends Model
{
    protected $table = 'ibl_power';
    protected $primaryKey = 'Team';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'TeamID', 'Team', 'Division', 'Conference', 'ranking', 'win', 'loss', 'gb',
        'conf_win', 'conf_loss', 'div_win', 'div_loss', 'home_win', 'home_loss',
        'road_win', 'road_loss', 'last_win', 'last_loss', 'streak_type', 'streak'
    ];
}
