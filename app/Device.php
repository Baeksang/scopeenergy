<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $fillable = [ 
        'install',
        'system',
        'm_capacity',
        'm_manufacturer',
        'm_model',
        'm_azimuth',
        'm_tilt',
        'm_serial',
        'm_parallel',
        'm_step',
        'm_totalcapacity',
        'i_capacity',
        'i_manufacturer',
        'i_model'
        
    ];
}
