<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function getCoupons(){
        
        $getCoupons=Coupon::where('status',1)->get()->toArray();
       // dd($getCoupons);die;
       return $getCoupons;
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function store(){
        return $this->belongsTo('App\Models\Store','store_id');
    }
    
}
