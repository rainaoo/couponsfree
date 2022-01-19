<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
  //  protected $guarded=['id'];

    public static function getDeals(){
        //get banner
        $getDeals=Deal::where('status',1)->get()->toArray();
       // dd($getDeals);die;
       return $getDeals;
    }
    public static function indexdeal(){
        //get banner
        $indexdeal=Deal::orderBy('id','Desc')->where('status',1)->limit(3)->get()->toArray();
       // dd($getBlog);die;
       return $indexdeal;
    }
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function store(){
        return $this->belongsTo('App\Models\Store','store_id');
    }
}
