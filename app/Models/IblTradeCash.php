<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTradeCash extends Model
{
    protected $table = 'ibl_trade_cash';
    public $timestamps = false;
    protected $fillable = [
        'tradeOfferID',
        'sendingTeam',
        'receivingTeam',
        'cy1',
        'cy2',
        'cy3',
        'cy4',
        'cy5',
        'cy6'
    ];
}
