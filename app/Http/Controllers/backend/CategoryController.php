<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
use Image;

class CategoryController extends Controller
{
    public function categories(){
        $categories=Category::get()->toArray();
       // dd($banners);die;
        return view('admin.categories.category')->with(compact('categories'));
    }

    public function addEditCategories($id=null,Request $request){

        if($id==""){
            $category=new Category;
            $title="Add Category";
            $message="Category add successfuly";
            //add category functionality
           
        }else{
            $category=Category::find($id);
            $title="Edit Category";
            $message="Category edit successfuly";
            //edit category functionality
           
        }
        if($request->isMethod('post')){
            $data=$request->all();
           /* echo "<pre>";print_r($data);die;*/
            $category->name=$data['name'];
            $category->name_ar=$data['name_ar'];
            $category->status=1;

            $category->save();
            session::flash('sucess_message',$message);
            return redirect(('category'));
        }
        
        return view('admin.categories.add_edit_category')->with(compact('title','category'));
    }
    //update Category status
    public function updateCategoryStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
           // echo"<pre>"; print_r($data); die;
           if($data['status']=="Active"){
               $status=0;
           }else{
               $status=1;
           }
           Category::where('id',$data['category_id'])->update(['status'=>$status]);
           return response()->json(['status'=>$status,'category_id'=>$data['category_id']]);
        }
     }

      //delet banners
     public function deletCategory($id){

      //delet banner from table
      Category::where('id',$id)->delete();

   
       $message='Category  has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
   
       
     }
}
