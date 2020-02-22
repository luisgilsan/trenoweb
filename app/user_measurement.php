<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_measurement extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 
    ];

    public function unit_measurement()
    {
        return $this->belongsTo(unit_measurement::class,'unit_id');
    }

}
