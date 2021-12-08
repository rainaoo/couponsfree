<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller as RtlController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function fileUpload(Request $request,$image_key,$upload_path=""){
        $fileName="";
        if($upload_path==""){
            $upload_path=public_path("backend/dist/img/uploads");

      }
      if($request->hasFile($image_key)){
          $rand=rand(10,100);
          $image=$request->file($image_key);
          $fileName=$name=date('dmY').time().$rand.'.'.$image->getClientOriginalExtension();
          $image->move($upload_path,$name);
      }else{
          dd($request->file($image_key));
      }
      return $fileName;
    }
    
}