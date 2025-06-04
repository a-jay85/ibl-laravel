<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblFaOffer extends Model
{
    protected $table = 'ibl_fa_offers';
    protected $primaryKey = 'primary_key';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'team',
        'offer1',
        'offer2',
        'offer3',
        'offer4',
        'offer5',
        'offer6',
        'modifier',
        'random',
        'perceivedvalue',
        'MLE',
        'LLE',
    ];
}
