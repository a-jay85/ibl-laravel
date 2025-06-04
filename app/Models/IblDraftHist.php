<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblDraftHist extends Model
{
    protected $table = 'ibl_draft_hist';
    public $timestamps = false;

    protected $fillable = [
        'player_id',
        'pick_no',
        'round_no',
        'year_no',
        'city_name',
        'team_name',
        'player_name',
    ];
}
