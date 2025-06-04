<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblDemand extends Model
{
    protected $table = 'ibl_demands';
    protected $primaryKey = 'name';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'dem1',
        'dem2',
        'dem3',
        'dem4',
        'dem5',
        'dem6',
    ];
}
