<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'projectid',
        'projectname', 
        'customername',
        'customercontact',
        'customerphone',
        'address1',
        'address2',
        'address3',
        'kepcoid',
        'businessmodel',
        'building'
    ];
}
