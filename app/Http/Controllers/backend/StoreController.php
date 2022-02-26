<?php

namespace App\Http\Controllers\backend;

use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Image;
use App\Models\Deal;

class StoreController extends Controller
{
    
    public function stores(){
        $stores=Store::get();
        return view('admin.stores.store')->with(compact('stores'));
    }
    public function stores_single(Store $store){
       // dd($store);
        $deals=Deal::with(['store'=>function($query){
            $query->select('id','name','image');
        }])->orderBy('id','Desc')->where('store_id',$store->id)->where('status',1)->get();
     // dd($deals);
        return view('front.temp_en.stores_single')->with('store',$store,$deals); 
    }
    public function addEditStore($id=null,Request $request){

        if($id==""){
            $store=new Store;
            $title="Add Store";
            $message="store add successfuly";
            //add category functionality
           
        }else{
            $store=store::find($id);
            $title="Edit store";
            $message="store edit successfuly";
            //edit category functionality
           
        }
        if($request->isMethod('post')){
            $data=$request->all();
           /* echo "<pre>";print_r($data);die;*/
            $store->url=$data['url'];
            $store->description=$data['description'];
            $store->description_ar=$data['description_ar'];
            $store->name=$data['name'];
            $store->status=1;

             //upload product image
             if($request->hasFile('image')){
                $image_tmp=$request->file('image'); 
                if($image_tmp->isValid()){
                    //upload image after resize
                    $image_name=$image_tmp->getClientOriginalName();
                    $extension=$image_tmp->getClientOriginalExtension();
                    $imageName=$image_name.'_'.rand(111,99999).'.'.$extension;
                    $store_image_path='public/backend/dist/img/store_images/'.$imageName;
                    Image::make($image_tmp)->resize(500,800)->save($store_image_path);
                    $store->image=$imageName;
 
                } 
            }
            $store->save();
            session::flash('sucess_message',$message);
            return redirect(('store'));
        }
        
        return view('admin.stores.add_edit_store')->with(compact('title','store'));
    }

     //delet banners
     public function deletStore($id){
        //get Store image;
      $storeImage= Store::where('id',$id)->first();

      //get Store image path
      $store_image_path='public/backend/dist/img/store_images/';

      //delet Store image from folder
      if(file_exists($store_image_path.$storeImage->image)){
          unlink($store_image_path.$storeImage->image);
      }

      //delet Store from table
      Store::where('id',$id)->delete();

   
       $message='Store  has been deleted successfully!';
      Session::flash('success_message',$message);
      return redirect()->back();
   
       
     }

    public function updateStoreStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
           // echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           Store::where('id',$data['store_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'store_id'=>$data['store_id']]);
        }
     }
}
