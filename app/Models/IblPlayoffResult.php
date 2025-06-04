<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblPlayoffResult extends Model
{
    protected $table = 'ibl_playoff_results';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'year', 'round', 'winner', 'loser', 'loser_games'
    ];
}
