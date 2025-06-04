<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblTeamAward extends Model
{
    protected $table = 'ibl_team_awards';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'year',
        'name',
        'Award',
        'ID'
    ];
}
