<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblBoxScore extends Model
{
    protected $table = 'ibl_box_scores';
    public $timestamps = false;

    protected $fillable = [
        'Date',
        'name',
        'pos',
        'pid',
        'visitorTID',
        'homeTID',
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
