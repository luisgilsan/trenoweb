<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Assessment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'partner_user_id', 'measurement_date','image'
    ];

    public function UserCustomer()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function UserAssessor()
    {
        return $this->belongsTo(User::class,'partner_user_id');
    }

    public static function setPicture($picture){
        $actual = False;
        if ($picture){
            if ($actual){
                Storage::disk('public')->delete("images/assessment/$actual");
            }
            $imageName = Str::random(20).'.jpg';
            $image = Image::make($picture)->encode('jpg',75);
            $image->resize(530,470, function($constraint){
                $constraint->upsize(); 
            });
            Storage::disk('public')->put("'images/assessment/'$imageName",$image->stream());
            return $imageName;
        } else {
            return False;
        }
        
    }

}
