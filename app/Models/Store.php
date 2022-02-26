<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
  protected $guarded=['id'];

    public static function getStores(){
       
        $getStores=Store::where('status',1)->get()->toArray();
       // dd($getStores);die;
       return $getStores;
    }
    public function deals(){
        return $this->hasMany('App\Models\Deal');
    }

    public function coupons(){
        return $this->hasMany('App\Models\Coupon');
    }
}
