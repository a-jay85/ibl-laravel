<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblGmHistory extends Model
{
    protected $table = 'ibl_gm_history';
    protected $primaryKey = 'prim';
    public $timestamps = false;

    protected $fillable = [
        'year',
        'name',
        'Award',
    ];
}
