<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use validator;

class APIController extends Controller
{
    public function getUser($id=null){
        if(empty($id)){
            $users = User::get();
            return response()->json(["users"=>$users],200);
        }else{
                $users = User::find($id);
                return response()->json(["users"=>$users],200);
            }
        }
    
  

     public function addUsers(Request  $request){
   if($request->isMethod('post')){
       $userData = $request->input();
      // echo "<pre>"; print_r($userData); die;

           // simple post api validations
      
               //check user Details
               if(empty($userData['name']) || empty($userData['email']) || empty($userData['password'])
               ){
            $error_message = "please enter complete user details!";
            return response()->json(["status"=>false,"message"=>$message],422);
               }
        
    // check if email is valid
    if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid email address";
         return response()->json(["status"=>false,"message"=>$error_message], 422);
    }

    //check if User Email Already Exists
   $userCount = User::where('email',$userData['email'])->count();
   if($userCount>0){
     $error_message = "Email already exists";
   }
   if(isset($error_message)&&!empty($error_message)){
    return response()->json(["status"=>false,"message"=>$error_message],422);
   }
     
   
   //return response()->json(["status"=>false,"message"=>$message],422);

       $user = new User;
       $user->name = $userData['name'];
       $user->email = $userData['email'];
       $user->password = bcrypt($userData['password']);
       $user->save();
       return response()->json(['message' =>'User added successfully!'],201);
    }
   }


         public function addMultipleUsers(Request  $request){
            if($request->isMethod('post')){
                $userData = $request->input();
               // echo "<pre>"; print_r($userData); die;

               // simple post api validations

               foreach ($userData['users'] as $key => $value) {
                $user = new User;
                $user->name = $value['name'];
                $user->email = $value['email'];
                $user->password = bcrypt($value['password']);
                $user->save();
               }
               return response()->json(['message' =>'User added successfully!....Agba programmer']);

            }
        }
        public function updateUserDetails(Request $request){
            if($request->isMethod('put')){
                $userData = $request->input();
               // echo "<pre>"; print_r($userData); die;
                User::where('id',$userData['id'])->update(['name'=>$userData['name'], 'email'=>
                $userData['email'],'password'=>bcrypt($userData['password'])]);
                return response()->json(['message'=>"User details updated successfully!"],202);

            }
        }


}
  //  }

