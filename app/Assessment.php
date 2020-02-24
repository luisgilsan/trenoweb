<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'partner_user_id', 'measurement_date'
    ];

    public function UserCustomer()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function UserAssessor()
    {
        return $this->belongsTo(User::class,'partner_user_id');
    }

}
