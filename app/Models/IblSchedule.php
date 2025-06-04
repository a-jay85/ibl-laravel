<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblSchedule extends Model
{
    protected $table = 'ibl_schedule';
    protected $primaryKey = 'SchedID';
    public $timestamps = false;

    protected $fillable = [
        'Year', 'BoxID', 'Date', 'Visitor', 'VScore', 'Home', 'HScore'
    ];
}
