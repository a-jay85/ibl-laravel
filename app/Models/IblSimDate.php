<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblSimDate extends Model
{
    protected $table = 'ibl_sim_dates';
    protected $primaryKey = 'Sim';
    public $timestamps = false;

    protected $fillable = [
        'Start Date', 'End Date'
    ];
}
