<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblDraft extends Model
{
    protected $table = 'ibl_draft';
    protected $primaryKey = 'draft_id';
    public $timestamps = false;

    protected $fillable = [
        'year',
        'team',
        'player',
        'round',
        'pick',
        'date',
    ];
}
