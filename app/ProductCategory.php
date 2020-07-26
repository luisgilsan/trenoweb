<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','picture',
    ];

    //
    public static function setPicture($picture){
        $actual = False;
        if ($picture){
            if ($actual){
                Storage::disk('public')->delete("images/categories/$actual");
            }
            $imageName = Str::random(20).'.jpg';
            $image = Image::make($picture)->encode('jpg',75);
            $image->resize(530,470, function($constraint){
                $constraint->upsize(); 
            });
            Storage::disk('public')->put("images/categories/$imageName",$image->stream());
            return $imageName;
        } else {
            return False;
        }
        
    }

    public static function updatePicture($picture,$id){
        if ($picture){
            $product = product::findOrFail($id);
            if ($product->picture ){
                Storage::disk('public')->delete("images/categories/$product->picture");
            }
            if ($picture){
                $imageName = Str::random(20).'.jpg';
                $image = Image::make($picture)->encode('jpg',75);
                $image->resize(530,470, function($constraint){
                    $constraint->upsize(); 
                });
                Storage::disk('public')->put("images/categories/$imageName",$image->stream());
                return $imageName;
            } else {
                return False;
            }
        } else{
            return False;            
        }   
    }

    public static function deletePicture($id){
        $product = product::findOrFail($id);
        if ($product->picture ){
            Storage::disk('public')->delete("images/categories/$product->picture");
        }
    }
}
