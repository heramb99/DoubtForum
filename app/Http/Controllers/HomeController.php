<?php

namespace App\Http\Controllers;
use App\User;
use App\Question;
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
            
            echo "success";

  			$notification = array(
                'message' => 'Account Created Successfully',
                'alert-type' => 'success'
              );
            
            return back()->with($notification);

    }

    public function question(){
        if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');  
    
         return view('ask',compact('user')) ;
    }

    public function addquestion(){
        if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');
         
         
        
         $data=request()->validate(
            [
                "question"=>'required',
                "field"=>'required',
            ]);

            $q=new Question();
            $q->question=request()->question;
            $q->field=request()->field;
            $q->uid=$user->user_id;

            $q->save();

            echo "success";

            $notification = array(
              'message' => 'Question Submitted',
              'alert-type' => 'success'
            );

            return back()->with($notification);
    }

    public function fetchquestion(){

        if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');

      }
      public function fetchquestionforpy()
      {
        $quest= Question::where('field','Python')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->question;
        }
        
        return view('questionslist',compact('qno'));
      }
      public function fetchquestionforjava()
      {
        $quest= Question::where('field','Java')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->question;
        }
        
        return view('questionslist',compact('qno'));
      }
      public function fetchquestionforc()
      {
        $quest= Question::where('field','C++')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->question;
        }
        
        return view('questionslist',compact('qno'));
      }

}
