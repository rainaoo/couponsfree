<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Store;
use Session;
use Image;

class BlogController extends Controller
{
    public function blogs(){
        $blogs=blog::with(['category'=>function($query){
            $query->select('id','name');
        },'store'=>function($query){
            $query->select('id','name');
        }])->get();
       // dd($banners);die;
        return view('admin.blogs.blog')->with(compact('blogs'));
    }
    public function blog_single(Blog $blog){
        //dd($blog);
        $blogs=Blog::with(['category'=>function($query){
            $query->select('id','name');
        },'store'=>function($query){
            $query->select('id','name');
        }])->where('id',$blog->id)->where('status',1)->get();
      // dd($blogs);
         return view('front.temp_en.blog_single')->with('blog',$blog,$blogs); 
     }

     public function blog_single_ar(Blog $blog){
        //dd($blog);
        $blogs=Blog::with(['category'=>function($query){
            $query->select('id','name');
        },'store'=>function($query){
            $query->select('id','name');
        }])->where('id',$blog->id)->where('status',1)->get();
      // dd($blogs);
         return view('front.temp_ar.blog_single')->with('blog',$blog,$blogs); 
     }

    public function addEditBlog(Request $request,$id=null){
        if($id==""){
            $title="Add blog";
            $blog= new Blog;
            $blogdata=array();
            $message="blog added successfully";
        }else{
            $title="Edit blog";
            $blogdata=Blog::find($id);
            /* $blogdata=json_decode(json_encode($blogdata),true);
            echo "<pre>"; print_r($blogdata); die;*/ 
            $blog=Blog::find($id);
            $message="blog update successfully";
        }
        
        if($request->isMethod('post')){
            $data=$request->all();
          //  echo "<pre>"; print_r($data); die;

             


            //upload blog image
            if($request->hasFile('main_image')){
               $image_tmp=$request->file('main_image'); 
               if($image_tmp->isValid()){
                   //upload image after resize
                   $image_name=$image_tmp->getClientOriginalName();
                   $extension=$image_tmp->getClientOriginalExtension();
                   $imageName=$image_name.'_'.rand(111,99999).'.'.$extension;
                   $blog_image_path='public/backend/dist/img/blog_images/'.$imageName;
                   Image::make($image_tmp)->save($blog_image_path);
                   $blog->main_image=$imageName;

               } 
            }

            
            
            //save blog data in table
            $categorydetails=Category::find($data['category_id']);
            $blog->store_id=$data['store_id'];
            $blog->category_id=$data['category_id'];
            $blog->title=$data['title'];
            $blog->title_ar=$data['title_ar'];
            $blog->description=$data['description'];
            $blog->description_ar=$data['description_ar'];
           
            $blog->status=1;
            $blog->save();

            Session::flash('success_message', $message);
            return redirect('blog');

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
        return view('admin.blogs.add_edit_blog')->with(compact('title','categories',
      'blogdata','stores','blog'));
    }

    public function updateBlogStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
       //  echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           blog::where('id',$data['blog_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'blog_id'=>$data['blog_id']]);
        }
     }

     public function deletBlog($id){
        
        //get banner image;
    $blogImage= blog::where('id',$id)->first();
     //get banner image path
    $blog_image_path='public/backend/dist/img/blog_images/';

    //delet banner image from folder
    if(file_exists($blog_image_path.$blogImage['main_image'])){
        unlink($blog_image_path.$blogImage['main_image']);
    }
    blog::where('id',$id)->delete();



     $message='blog has been deleted successfully!';
    Session::flash('success_message',$message);
    return redirect()->back();

   }


   public function deletDealImage($id){
     //get blog image
  $blogImage=blog::select('main_image')->where('id',$id)->first();
  //get blog image path
  $blog_image_path='public/backend/dist/img/blog_images/';
 
  //delete blog small image form small folder if exists
  if(file_exists($blog_image_path.$blogImage->main_image)){
      unlink($blog_image_path.$blogImage->main_image);
  }

  //delete blog image form products table
  blog::where('id',$id)->update(['main_image'=>'']);

  $message='blog image has been deleted successfully!';
  Session::flash('success_message',$message);
  return redirect()->back();
 }
 public function deletBlogImage($id){
    //get Coupon image
 $blogImage=Blog::select('main_image')->where('id',$id)->first();
 //get Coupon image path
 $blog_image_path='public/backend/dist/img/blog_images/';

 //delete Coupon small image form small folder if exists
 if(file_exists($blog_image_path.$blogImage->main_image)){
     unlink($blog_image_path.$blogImage->main_image);
 }

 //delete Coupon image form products table
 Blog::where('id',$id)->update(['main_image'=>'']);

 $message='blog image has been deleted successfully!';
 Session::flash('success_message',$message);
 return redirect()->back();
}

}
