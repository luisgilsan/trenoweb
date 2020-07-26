<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_requests extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name','city','address','message','state',
    ];

}
