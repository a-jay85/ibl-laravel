<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblDraftPick extends Model
{
    protected $table = 'ibl_draft_picks';
    protected $primaryKey = 'pickid';
    public $timestamps = false;

    protected $fillable = [
        'ownerofpick',
        'teampick',
        'year',
        'round',
        'notes',
    ];
}
