<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function getBanners(){
        //get banner
        $getBanners=Banner::where('status',1)->get()->toArray();
       // dd($getBanners);die;
       return $getBanners;
    }
}
