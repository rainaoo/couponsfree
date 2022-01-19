<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Deal;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        //get featuer deals
       $featuredItemsCount=Deal::where('status',1)->count();
       $featuredItems=Deal::where('status',1)->get()->toArray();
       $featuredItemsChunk=array_chunk($featuredItems,4);
      /*  echo "<pre>";print_r($featuredItems);die; */
    /*   dd($featuredItems);die; */

    
        $page_name="home";
        return view('front.temp_en.home')->with(compact('page_name','featuredItemsChunk','featuredItemsCount'));
    }
}
