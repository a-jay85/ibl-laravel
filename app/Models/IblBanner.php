<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblBanner extends Model
{
    protected $table = 'ibl_banners';
    public $timestamps = false;

    protected $fillable = [
        'year',
        'currentname',
        'bannername',
        'bannertype',
    ];
}
