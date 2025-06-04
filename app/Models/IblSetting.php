<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblSetting extends Model
{
    protected $table = 'ibl_settings';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name', 'value'
    ];
}
