<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;

class Admincontroller extends Controller
{
  public function index(){
      return view('admin.login');
  }

  public function makeLogin(Request $request){
  
    $validator=Validator::make($request->all(),[
   'username'=>'required',
   'email'=>'required',
   'password'=>'required',
   ]);
   if ($validator->fails()){
       return back()
             ->withErrors($validator)
             ->withInput();
   }
  // $password=Hash::make('password');
   $data=array(
    
    'username'=>$request->username,
    'email'=>$request->email,
    'password'=>$request->password,
   );
  
   echo "<pre>";print_r($data);
 // echo "<pre>";print_r($data[Hash::make('password')]);
 //error echo Hash::make(000);?><br><?php
  echo Hash::make('000');?><br><?php
 // echo "<pre>";print_r($data[Hash::make('000')]);
     if(Auth::guard('admin')->attempt($data)){
            return redirect('dashboard');
        }else{
            return back();
        }  
   } 

   public function dashboard(){
       return view('admin.dashboard');
   }

   public function dashboard_ar(){
    return view('admin.dashboard_ar');
}
   
  /*  $admin=admin::where('username',$request->username)
                ->where('email',$request->email)->where('password',$request->password)->get()->toArray();
              if($admin)  {
                  echo "yes";
              }else{
                  echo "no";
              } */

  }

