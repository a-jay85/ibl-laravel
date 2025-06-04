<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblScoutRookieRating extends Model
{
    protected $table = 'ibl_scout_rookieratings';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name', 'pos', 'age', 'team', 'fga', 'fgp', 'fta', 'ftp', 'tga', 'tgp', 'orb', 'drb', 'ast', 'stl', 'tvr', 'blk',
        'offo', 'offd', 'offp', 'offt', 'defo', 'defd', 'defp', 'deft', 'tal', 'skl', 'int', 'ranking', 'invite', 'drafted', 'sta'
    ];
}
