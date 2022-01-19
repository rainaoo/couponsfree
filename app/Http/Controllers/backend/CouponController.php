<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Category;
use App\Models\Store;
use Session;
use Image;

class CouponController extends Controller
{
    public function coupons(){
        $coupons=Coupon::with(['category'=>function($query){
            $query->select('id','name');
        },'store'=>function($query){
            $query->select('id','name');
        }])->get();
       // dd($banners);die;
        return view('admin.coupons.coupon')->with(compact('coupons'));
    }

    public function addEditCoupon(Request $request,$id=null){
        if($id==""){
            $title="Add coupon";
            $coupon= new Coupon;
            $coupondate=array();
            $message="coupon added successfully";
        }else{
            $title="Edit coupon";
            $coupondata=Coupon::find($id);
            /* $coupondata=json_decode(json_encode($coupondata),true);
            echo "<pre>"; print_r($coupondata); die;*/ 
            $coupon=Coupon::find($id);
            $message="coupon update successfully";
        }
        
        if($request->isMethod('post')){
            $data=$request->all();
          //  echo "<pre>"; print_r($data); die;

             


            //upload coupon image
            if($request->hasFile('main_image')){
               $image_tmp=$request->file('main_image'); 
               if($image_tmp->isValid()){
                   //upload image after resize
                   $image_name=$image_tmp->getClientOriginalName();
                   $extension=$image_tmp->getClientOriginalExtension();
                   $imageName=$image_name.'_'.rand(111,99999).'.'.$extension;
                   $coupon_image_path='public/backend/dist/img/coupon_images/'.$imageName;
                   Image::make($image_tmp)->save($coupon_image_path);
                   $coupon->main_image=$imageName;

               } 
            }

            
            
            //save coupon data in table
            $categorydetails=Category::find($data['category_id']);
            $coupon->store_id=$data['store_id'];
            $coupon->category_id=$data['category_id'];
            $coupon->title=$data['title'];
            $coupon->title_ar=$data['title_ar'];
            $coupon->coupon_code=$data['coupon_code'];
            $coupon->coupon_discount=$data['coupon_discount'];
            $coupon->link=$data['link'];
            $coupon->description=$data['description'];
            $coupon->description_ar=$data['description_ar'];
            $coupon->expires=$data['expires'];
            $coupon->status=1;
            $coupon->save();

            Session::flash('success_message', $message);
            return redirect('coupons');

        }
        $categories=Category::where('status',1)->get();
        $categories=json_decode(json_encode($categories),true);
         //sections with category
      // $categories=Store::with('categories')->get();
      // $categories=json_decode(json_encode($categories),true);
     //  echo "<pre>"; print_r($categories);die;

     //get all brand
     $stores=Store::where('status',1)->get();
     $stores=json_decode(json_encode($stores),true);
     //  echo "<pre>"; print_r($brands);die;
        return view('admin.coupons.add_edit_coupon')->with(compact('title','categories',
      'coupondata','stores','coupon'));
    }
        
    public function updateCouponStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
        // echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           Coupon::where('id',$data['coupon_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'coupon_id'=>$data['coupon_id']]);
        }
     }

     public function deletCoupon($id){
        
           //get banner image;
       $couponImage= Coupon::where('id',$id)->first();
        //get banner image path
       $coupon_image_path='public/backend/dist/img/coupon_images/';

       //delet banner image from folder
       if(file_exists($coupon_image_path.$couponImage['main_image'])){
           unlink($coupon_image_path.$couponImage['main_image']);
       }
       Coupon::where('id',$id)->delete();



        $message='coupon has been deleted successfully!';
       Session::flash('success_message',$message);
       return redirect()->back();

      }


      public function deletCouponImage($id){
        //get Coupon image
     $couponImage=Coupon::select('main_image')->where('id',$id)->first();
     //get Coupon image path
     $coupon_image_path='public/backend/dist/img/coupon_images/';
    
     //delete Coupon small image form small folder if exists
     if(file_exists($coupon_image_path.$couponImage->main_image)){
         unlink($coupon_image_path.$couponImage->main_image);
     }
  
     //delete Coupon image form products table
     Coupon::where('id',$id)->update(['main_image'=>'']);

     $message='Coupon image has been deleted successfully!';
     Session::flash('success_message',$message);
     return redirect()->back();
    }

}
