<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTradeQueue extends Model
{
    protected $table = 'ibl_trade_queue';
    public $timestamps = false;
    protected $fillable = [
        'query',
        'tradeline'
    ];
}
