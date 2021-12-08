<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rtlcontroller extends Controller
{
  
    /******************* arbic template ************************** */

    public function home(){
        return view('front.temp_ar.home');
    }
    public function guide(){
        return view('front.temp_ar.guide');
       }

    public function faq(){
        return view('front.temp_ar.faq');  
    }

    public function singin(){
        return view('front.temp_ar.sing-in');  
    }


    public function singup(){
        return view('front.temp_ar.sing-up');  
    }

    public function result(){
        return view('front.temp_ar.result');  
    }
    public function search(){
        return view('front.temp_ar.search'); 
    }

    public function cart(){
        return view('front.temp_ar.cart'); 
    }
    public function wishlist(){
        return view('front.temp_ar.wishlist'); 
    }
     /************* deals pages **************************************** */
    public function deal_grid_sidebar(){
        return view('front.temp_ar.deal_grid_sidebar'); 
    }
    public function deals_grid(){
        return view('front.temp_ar.deals_grid'); 
    }
    public function deal_list(){
        return view('front.temp_ar.deal_list'); 
    }
    public function deal_single(){
        return view('front.temp_ar.deal_single'); 
    }
    /************* coupons pages **************************************** */
    public function coupons_grid_sidebar(){
        return view('front.temp_ar.coupons_grid_sidebar'); 
    }
    public function coupons_grid(){
        return view('front.temp_ar.coupons_grid'); 
    }
    public function coupons_list(){
        return view('front.temp_ar.coupons_list'); 
    }
    /************* stores pages **************************************** */
    public function stores_search(){
        return view('front.temp_ar.stores_search'); 
    }
    public function stores_categores(){
        return view('front.temp_ar.stores_categores'); 
    }
    public function stores_single(){
        return view('front.temp_ar.stores_single'); 
    }
      /************* contact us page**************************************** */
      public function contact(){
        return view('front.temp_ar.contact'); 
    }

     /************* plogs page**************************************** */
     public function blogs(){
        return view('front.temp_ar.blogs'); 
    }
    public function blog_single(){
        return view('front.temp_ar.blog_single'); 
    }

     /************* checkout pages**************************************** */
     public function checkout_method(){
        return view('front.temp_ar.checkout_method'); 
    }
    public function checkout_billing(){
        return view('front.temp_ar.checkout_billing'); 
    }
    public function checkout_payment(){
        return view('front.temp_ar.checkout_payment'); 
    }

}
