<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class APIController extends Controller
{
    public function getUser($id=null){
        if(empty($id)){
            $users = User::get();
            return response()->json(["users"=>$users]);
        }else{
                $users = User::find($id);
                return response()->json(["users"=>$users]);
            }
        }
    
  

     public function addUsers(Request  $request){
   if($request->isMethod('post')){
       $userData = $request->input();
      // echo "<pre>"; print_r($userData); die;
       $user = new User;
       $user->name = $userData['name'];
       $user->email = $userData['email'];
       $user->password = bcrypt($userData['password']);
       $user->save();
       return response()->json(['message' =>'User added successfully!']);
    }
         }

         public function addMultipleUsers($Request $request){
            if($request->isMethod('post')){
                $userData = $request->input();
                echo "<prt>"; print_r($userData); die;
                
            }
         }
      }

  //  }

