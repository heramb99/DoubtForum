<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function login(){
        $email=request()->email;
        $pwd=request()->password;
   
          request()->validate([
           'email' =>'email|required',
           'password'=>'required'
          ]);
   
          $user=User::where('email',$email)->first();
       //    $ans=Hash::check('password',$user->password);
       $ans=false; 
       if($user->email==$email && $user->password==$pwd)
           $ans=true;
          if($ans==true)
               {
                   // $_SESSION['user']=$user;
                   Session::put('user', $user);
                   
                  return view('loggedinpage',compact('user'));
               }
          else 
          return  back()->withErrors(['Wrong Credentials']);     
   
    }
    public function logout(){
        Session::forget('user');
        return view('welcome');
    }
      

    public function register(){
        $data=request()->validate(
            [
                "name"=>'required',
                "email"=>'required|email',
                "password"=>'required',
            ]);
            $user= User::create($data);

            return view('welcome');

    }
}
