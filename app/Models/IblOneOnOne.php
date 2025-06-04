<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblOneOnOne extends Model
{
    protected $table = 'ibl_one_on_one';
    protected $primaryKey = 'gameid';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'playbyplay',
        'winner',
        'loser',
        'winscore',
        'lossscore',
        'owner',
    ];
}
