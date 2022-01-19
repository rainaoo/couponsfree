<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function getCategories(){
        $getCategories=Category::where('status',1)->get()->toArray();
        // dd($getCategories);die;
        return $getCategories;
        }
}
