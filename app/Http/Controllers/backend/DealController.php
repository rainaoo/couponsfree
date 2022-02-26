<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\Category;
use App\Models\Store;
use Session;
use Image;

class DealController extends Controller
{
    
    public function deals(){
        $deals=Deal::with(['category'=>function($query){
            $query->select('id','name');
        },'store'=>function($query){
            $query->select('id','name','image');
        }])->get();
      
        return view('admin.deals.deal')->with(compact('deals'));
    }
    public function deal_single(Deal $id){
        return view('front.temp_en.deal_single')->with('deal',$id); 
    }
    public function deal_single_ar(Deal $id){
        return view('front.temp_ar.deal_single')->with('deal',$id); 
    }
    public function addEditDeal(Request $request,$id=null){
        if($id==""){
            $title="Add deal";
            $deal= new Deal;
            $dealdata=array();
            $message="deal added successfully";
        }else{
            $title="Edit deal";
            $dealdata=Deal::find($id);
            /* $dealdata=json_decode(json_encode($dealdata),true);
            echo "<pre>"; print_r($dealdata); die;*/ 
            $deal=Deal::find($id);
            $message="deal update successfully";
        }
        
        if($request->isMethod('post')){
            $data=$request->all();
          //echo "<pre>"; print_r($data); die;

            //upload deal image
            if($request->hasFile('main_image')){
               $image_tmp=$request->file('main_image'); 
               if($image_tmp->isValid()){
                   //upload image after resize
                   $image_name=$image_tmp->getClientOriginalName();
                   $extension=$image_tmp->getClientOriginalExtension();
                   $imageName=$image_name.'_'.rand(111,99999).'.'.$extension;
                   $deal_image_path='public/backend/dist/img/deal_images/'.$imageName;
                   Image::make($image_tmp)->save($deal_image_path);
                   $deal->main_image=$imageName;

               } 
            }

            
            
            //save deal data in table
            $categorydetails=Category::find($data['category_id']);
            $deal->store_id=$data['store_id'];
            $deal->category_id=$data['category_id'];
            $deal->title=$data['title'];
            $deal->title_ar=$data['title_ar'];
            $deal->price_old=$data['price_old'];
            $deal->price_new=$data['price_new'];
            $deal->discount=$data['discount'];
            $deal->link=$data['link'];
            $deal->description=$data['description'];
            $deal->description_ar=$data['description_ar'];
            $deal->expires=$data['expires'];
           
            $deal->status=1;
            $deal->save();

            Session::flash('success_message', $message);
            return redirect('deals');

        }
       $categories=Category::where('status',1)->get();
       $categories=json_decode(json_encode($categories),true);
         //sections with category
       $store=Deal::with('store')->get();
//$store=json_decode(json_encode($store),true);
   //  echo "<pre>"; print_r($store);die;
    // return $store;

     //get all brand
     $stores=Store::where('status',1)->get();
     $stores=json_decode(json_encode($stores),true);
     //  echo "<pre>"; print_r($brands);die;
    // $deal=Deal::with('store')->get()->find($id);
   //  $store=$deal->store;
    // return $store->name;
        return view('admin.deals.add_edit_deal')->with(compact('title','categories',
      'dealdata','stores','deal','store'));
    }


    public function updateDealStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
        // echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           Deal::where('id',$data['deal_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'deal_id'=>$data['deal_id']]);
        }
     }

     public function deletDeal($id){
        
           //get banner image;
       $dealImage= Deal::where('id',$id)->first();
        //get banner image path
       $deal_image_path='public/backend/dist/img/deal_images/';

       //delet banner image from folder
       if(file_exists($deal_image_path.$dealImage['main_image'])){
           unlink($deal_image_path.$dealImage['main_image']);
       }
       Deal::where('id',$id)->delete();



        $message='deal has been deleted successfully!';
       Session::flash('success_message',$message);
       return redirect()->back();

      }


      public function deletDealImage($id){
        //get Coupon image
     $dealImage=Deal::select('main_image')->where('id',$id)->first();
     //get Coupon image path
     $deal_image_path='public/backend/dist/img/deal_images/';
    
     //delete Coupon small image form small folder if exists
     if(file_exists($deal_image_path.$dealImage->main_image)){
         unlink($deal_image_path.$dealImage->main_image);
     }
  
     //delete Coupon image form products table
     Deal::where('id',$id)->update(['main_image'=>'']);

     $message='Coupon image has been deleted successfully!';
     Session::flash('success_message',$message);
     return redirect()->back();
    }

}
