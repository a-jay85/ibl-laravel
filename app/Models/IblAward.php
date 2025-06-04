<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblAward extends Model
{
    protected $table = 'ibl_awards';
    protected $primaryKey = 'table_ID';
    public $timestamps = false;

    protected $fillable = [
        'year',
        'Award',
        'name',
    ];
}
