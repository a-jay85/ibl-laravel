<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IblOffenseSet extends Model
{
    protected $table = 'ibl_offense_sets';
    public $timestamps = false;

    protected $fillable = [
        'reveal', 'offense_name', 'TeamName', 'SetNumber',
        'PG_Depth_Name', 'SG_Depth_Name', 'SF_Depth_Name', 'PF_Depth_Name', 'C_Depth_Name',
        'PG_Low_Range', 'PG_High_Range', 'SG_Low_Range', 'SG_High_Range',
        'SF_Low_Range', 'SF_High_Range', 'PF_Low_Range', 'PF_High_Range',
        'C_Low_Range', 'C_High_Range'
    ];
}
