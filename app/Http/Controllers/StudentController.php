<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    function list(){
        return User::all();
    }

    function adduser(Request $request){

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
    
        if($user){
            return ["result"=>"User added sucessfully"];
        }
        else{
            return ["result"=>"User added failed!!"];
        }
       
    }

    function updateuser(Request $request){

        $user= User::find($request->id);
         
             $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;

        if($user->save()){
            return ["result"=>"User updated sucessfully"];
        }
        else{
            return ["result"=>"User updated failed!!"];
        }
       
    }

    function deleteuser($id){
        $user= User::destroy($id);
        if($user){
            return ["Result"=> "User is deletad Sucessfully"];
        }
        else{
            return ["Result"=>" This user is not Deleted or Not Found!!"];
        }
    }
}
