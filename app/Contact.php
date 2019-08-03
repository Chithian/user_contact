<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
    	'first_name',
        'last_name',
        'email',
        'phone_num',
        'major',
        'date_birth',
        'city',
        'country',
        'job_title'
    ];
}
