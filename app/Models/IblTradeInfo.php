<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTradeInfo extends Model
{
    protected $table = 'ibl_trade_info';
    public $timestamps = false;
    protected $fillable = [
        'tradeofferid',
        'itemid',
        'itemtype',
        'from',
        'to',
        'approval'
    ];
}
