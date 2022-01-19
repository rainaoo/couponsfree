<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image;

class BannersController extends Controller
{
    public function banners(){
        $banners=Banner::get()->toArray();
       // dd($banners);die;
        return view('admin.banners.banners')->with(compact('banners'));
    }

    public function addEditBanners($id=null,Request $request){

        if($id==""){
            $banner=new Banner;
            $title="Add Banners";
            $message="Banner add successfuly";
            //add category functionality
           
        }else{
            $banner=Banner::find($id);
            $title="Edit Banner";
            $message="Banner edit successfuly";
            //edit category functionality
           
        }
        if($request->isMethod('post')){
            $data=$request->all();
           /* echo "<pre>";print_r($data);die;*/
            $banner->link=$data['link'];
            $banner->title=$data['title'];
            $banner->title_ar=$data['title_ar'];
            $banner->alt=$data['alt'];
            $banner->discount=$data['discount'];
            $banner->status=1;

             //upload product image
             if($request->hasFile('image')){
                $image_tmp=$request->file('image'); 
                if($image_tmp->isValid()){
                    //upload image after resize
                    $image_name=$image_tmp->getClientOriginalName();
                    $extension=$image_tmp->getClientOriginalExtension();
                    $imageName=$image_name.'_'.rand(111,99999).'.'.$extension;
                    $banner_image_path='public/backend/dist/img/banner_images/'.$imageName;
                    Image::make($image_tmp)->resize(500,800)->save($banner_image_path);
                    $banner->image=$imageName;
 
                } 
            }
            $banner->save();
            session::flash('sucess_message',$message);
            return redirect(('banners'));
        }
        
        return view('admin.banners.add_edit_banner')->with(compact('title','banner'));
    }
    //update banner status
    public function updateBannerStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
           // echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           Banner::where('id',$data['banner_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'banner_id'=>$data['banner_id']]);
        }
     }

     //delet banners
     public function deletBanner($id){
         //get banner image;
       $bannerImage= Banner::where('id',$id)->first();

       //get banner image path
       $banner_image_path='public/backend/dist/img/banner_images/';

       //delet banner image from folder
       if(file_exists($banner_image_path.$bannerImage->image)){
           unlink($banner_image_path.$bannerImage->image);
       }

       //delet banner from table
       Banner::where('id',$id)->delete();

    
        $message='banner  has been deleted successfully!';
       Session::flash('success_message',$message);
       return redirect()->back();
    
        
      }
}
