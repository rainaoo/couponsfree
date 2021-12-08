<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Page;

class Pagecontroller extends Controller
{
    public function addpage(Request $request){

        $page=Page::where('page_title','home')->get();
        $numrow=count($page);
        if($numrow >0){
            return view('admin.home.addpage',['page'=>$page]);
        }else{
            $page=new page();
            return view('admin.home.addpage',['page'=>$page]);

        }
    }

    public function ourcompany(Request $request){

        $page=Page::where('page_title','ourcompany')->get();
       
            return view('admin.company.ourcompany',['page'=>$page,'total_row'=>count($page)]);
       
    }

    public function createpage(Request $request){

        $pagevalues['title']=$request->title;
        $datavalues=array();
       if($request->txt_name){
            $field=$request->txt_name;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $text=$field[$j];
                    $tx=$request->$text;
                    $field_name=Page::where(['section_title'=>$text,'page_title'=>$pagevalues['title']])->get();
                    if(count($field_name)>0){
                        $datavalues[$text]=$tx;
                    }else{
                        $newvalues[$text]=$tx;
                    }
                }
            }
       }

       if($request->image){
        $field=$request->image;
        if($field){
            for($j=0;$j<count($field);$j++){
                $image_name=$field[$j];
               if($request->$image_name){
                 $filename=$this->fileUpload($request,$image_name,'');

                 $field_name=Page::where(['section_title'=>$image_name,'page_title'=>$pagevalues['title']])->get();

                 if(count($field_name)>0){
                    $datavalues[$image_name]=$filename;
                }else{
                    $newvalues[$image_name]=$filename;
                }
                }
            }
        }
   }
   
       
    

            if(!empty($datavalues)){
                foreach($datavalues as $key=>$value){
                $where=array('section_title'=>$key,'page_title'=>$pagevalues['title']);
                $res=Page::where($where)->update(array('data'=>$value));
                if($res){
                    $success=1;
                }
            }
        }
        if(!empty($newvalues)){
            foreach($newvalues as $key=>$value){
                $data=array(
                    'page_title'=>$pagevalues['title'],
                    'section_title'=>$key,
                    'data'=>$newvalues[$key]
                );
                $res=Page::create($data);
            }
        }
        return redirect('/add-page');
  }
}
