<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTradeAutocounter extends Model
{
    protected $table = 'ibl_trade_autocounter';
    protected $primaryKey = 'counter';
    public $timestamps = false;
    protected $fillable = [
        'counter'
    ];
}
