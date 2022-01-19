<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function getBlog(){
        //get banner
        $getBlog=Blog::where('status',1)->get()->toArray();
       // dd($getBlog);die;
       return $getBlog;
    }
    public static function newPosts(){
        //get banner
        $newPosts=Blog::orderBy('id','Desc')->where('status',1)->limit(3)->get()->toArray();
       // dd($getBlog);die;
       return $newPosts;
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function store(){
        return $this->belongsTo('App\Models\Store','store_id');
    }
}
