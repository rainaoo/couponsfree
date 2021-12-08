<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basecontroller extends Controller
{
    public function home(){
     return view('front.temp_en.home');
    }
    public function guide(){
        return view('front.temp_en.guide');
       }

    public function faq(){
        return view('front.temp_en.faq');  
    }

    public function singin(){
        return view('front.temp_en.sing-in');  
    }


    public function singup(){
        return view('front.temp_en.sing-up');  
    }

    public function result(){
        return view('front.temp_en.result');  
    }
    public function search(){
        return view('front.temp_en.search'); 
    }

    public function cart(){
        return view('front.temp_en.cart'); 
    }
    public function wishlist(){
        return view('front.temp_en.wishlist'); 
    }
     /************* deals pages **************************************** */
    public function deal_grid_sidebar(){
        return view('front.temp_en.deal_grid_sidebar'); 
    }
    public function deals_grid(){
        return view('front.temp_en.deals_grid'); 
    }
    public function deal_list(){
        return view('front.temp_en.deal_list'); 
    }
    public function deal_single(){
        return view('front.temp_en.deal_single'); 
    }
    /************* coupons pages **************************************** */
    public function coupons_grid_sidebar(){
        return view('front.temp_en.coupons_grid_sidebar'); 
    }
    public function coupons_grid(){
        return view('front.temp_en.coupons_grid'); 
    }
    public function coupons_list(){
        return view('front.temp_en.coupons_list'); 
    }
    /************* stores pages **************************************** */
    public function stores_search(){
        return view('front.temp_en.stores_search'); 
    }
    public function stores_categores(){
        return view('front.temp_en.stores_categores'); 
    }
    public function stores_single(){
        return view('front.temp_en.stores_single'); 
    }
      /************* contact us page**************************************** */
      public function contact(){
        return view('front.temp_en.contact'); 
    }

     /************* plogs page**************************************** */
     public function blogs(){
        return view('front.temp_en.blogs'); 
    }
    public function blog_single(){
        return view('front.temp_en.blog_single'); 
    }

     /************* checkout pages**************************************** */
     public function checkout_method(){
        return view('front.temp_en.checkout_method'); 
    }
    public function checkout_billing(){
        return view('front.temp_en.checkout_billing'); 
    }
    public function checkout_payment(){
        return view('front.temp_en.checkout_payment'); 
    }

}
