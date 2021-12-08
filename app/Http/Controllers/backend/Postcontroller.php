<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\backend\Post;
use Session;
use File;

class Postcontroller extends Controller
{
    public function create(Request $request){

        $data['post']= new Post();
        if($request->post_id){
            $id=$request->post_id;
            $data['post']=Post::where('id',$id)->first();
        }
        return view('admin.post.addpost',$data);
    }

    public function show(){
        $data['posts']=Post::paginate(5);
        return view('admin.post.showpost',$data);
    }

    public function store(Request $request){
        $id='';
        if($request->post_id){
            $id=$request->post_id;
        }
      
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'section_title'=>'required',
        ]);
        if($validator->fails()){
            $success=0;
            return back()->withErrors($validator)->withInput();
        }else{
            $filename='';
            if($request->image){
                $filename=$this->fileUpload($request,'image','');
            }else{
                if($request->old_image){
                    $filename=$request->old_image;
                }
            }
            $data=array(
                'page_title'=>$request->page_title,
                'section_title'=>$request->section_title,
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$filename,
            );
            $post=Post::updateOrcreate(['id'=>$id],$data);
            if($post){
                if($id)
                return redirect()->route('show-post')->with(['message'=>'post successfully updated']);
                else
                return redirect()->route('show-post')->with(['message'=>'post successfully inserted']);
            }else{
                return back()->with(['message'=>'something worng']);
            }

        }
    }

    /* public function delete(Request $request){
        $id=$request->id;
        $img=$request->image;
       if($id){
           if(File::exists(public_path('backend/dist/img/uploads/'.$img))){
               File::delete(public_path('backend/dist/img/uploads/'.$img));

               $res=Post::find($id)->delete();
               if($res){
                   echo json_encode("successfully deleted");
               }else{
                echo json_encode("somthing went wrong");
               }

           }else{
            echo json_encode("file not exists");
           }
       }else{
        echo json_encode("post id not found");
       }
    }
 */

    public function delete($id){
        //get post image
      $postImage= Post::where('id',$id)->first();

      //get post image path
      $post_image_path='backend/dist/img/uploads/';

      //delet banner image from folder
      if(file_exists($post_image_path.$postImage['image'])){
          unlink($post_image_path.$postImage['image']);
      }

      //delet banner from table
      Post::where('id',$id)->delete();

   
       $message='banner  has been deleted successfully!';
      Session::flash('success_message',$message);
      return redirect()->back();
   
       
     }
}
