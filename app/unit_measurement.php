<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit_measurement extends Model
{
    //

    public function user_measurement()
    {
        return $this->hasMany(user_measurement::class,'unit_id');
    }
}
