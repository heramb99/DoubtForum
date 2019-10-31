<?php

namespace App\Http\Controllers;
use App\User;
use App\Question;
use App\Answer;
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
            
            $notification = array(
              'message' => 'Login to answer question',
              'alert-type' => 'error'
            );

            return back()->with($notification);
        }
               
         else $user=Session::get('user');


         $quest= Question::where('uid',$user->user_id)->get();
        
        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;
        }

        $queslist=array();
    for($i=0;$i<count($quest);$i++){
        $a=Question::find($qno[$i]);
        $queslist[$qno[$i]]=$a->question;
    }
    
        return view('usersquestions',compact('queslist','user'));


    }
    
    //non members
      public function fetchquestionforpy()
      {
        $quest= Question::where('field','Python')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;   
        }

       // dd($qnolist);
        $queslist=array();

        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
            $queslist[$qno[$i]]=$a->question;
        }
       // dd($queslist);
        
        return view('questionslist',compact('queslist'));
      }
      public function fetchquestionforjava()
      {
        $quest= Question::where('field','Java')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;
        }
        $queslist=array();
        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
            $queslist[$qno[$i]]=$a->question;
        }
        
        return view('questionslist',compact('queslist'));
      }
      public function fetchquestionforc()
      {
        $quest= Question::where('field','C++')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;
        }

       // dd($qno);
        $queslist=array();
        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
           // dd($a->question);
            $queslist[$qno[$i]]=$a->question;
        }
        //dd($queslist);
        
        
        return view('questionslist',compact('queslist'));
      }

    //members
    
    public function fetchquestionforpylogged()
      {
        if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');
        $quest= Question::where('field','Python')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;   
        }

       // dd($qnolist);
        $queslist=array();

        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
            $queslist[$qno[$i]]=$a->question;
        }
       // dd($queslist);
        
        return view('loggedinquestionlist',compact('queslist','user'));
      }
      public function fetchquestionforjavalogged()
      {
          
          if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');
        $quest= Question::where('field','Java')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;
        }
        $queslist=array();
        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
            $queslist[$qno[$i]]=$a->question;
        }
        
        return view('loggedinquestionlist',compact('queslist','user'));
      }
      public function fetchquestionforclogged()
      {
          if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');
        $quest= Question::where('field','C++')->get();

        $qno=array();

        for($i=0;$i<count($quest);$i++){
            $qno[$i] =$quest[$i]->id;
        }

       // dd($qno);
        $queslist=array();
        for($i=0;$i<count($quest);$i++){
            $a=Question::find($qno[$i]);
           // dd($a->question);
            $queslist[$qno[$i]]=$a->question;
        }
        //dd($queslist);
        
        
        return view('loggedinquestionlist',compact('queslist','user'));
      }

      public function fetchanswers($qid)
      {
          
        
        $quest= Question::find($qid);

        $accs=User::all();

        //dd($quest);

        $answerlist=Answer::where('qid',$qid)->get();

       // dd($answerlist);

        $namelist=array();
        for($i=0;$i<count($answerlist);$i++){
            $aid =$answerlist[$i]->aid;
            $userdetail= User::find($aid);

            $namelist[$i] =$userdetail->name;

        }

        $alist=array();
        for($i=0;$i<count($answerlist);$i++){
            $alist[$namelist[$i]] =$answerlist[$i]->answer;
        }

       // dd($alist);
      // dd($accs);
    

        return view('question',compact('quest','alist','answerlist','accs'));
      }

      public function addanswers($qdetails){
        if(Session::get('user')==null){
            
            $notification = array(
              'message' => 'Login to answer question',
              'alert-type' => 'error'
            );

            return back()->with($notification);
        }
               
         else {
         $user=Session::get('user');
         
         $quesdetail= Question::find($qdetails);
        
         $fetcheduid=$quesdetail->uid;
        
         $data=request()->validate(
            [
                "postanswer"=>'required'
            ]);

            $q=new Answer();
            $q->answer=request()->postanswer;
            $q->qid=$qdetails;
            $q->quid=$fetcheduid;
            $q->aid=$user->user_id;

            $q->save();

            echo "success";

            $notification = array(
              'message' => 'Answer Submitted Please Refresh Page',
              'alert-type' => 'success'
            );

            return back()->with($notification);
        }
    }
    public function viewanswers(){
        if(Session::get('user')==null){

            return view('welcome');
        }
               
         else $user=Session::get('user');

        // dd($user);
         
         $answerlist=Answer::where('aid',$user->user_id)->get();
        
        //  dd($answerlist);

         $anlist=array();
        for($i=0;$i<count($answerlist);$i++){
            $anslist[$i] =$answerlist[$i]->answer;
        }
        $qnlist=array();
        for($i=0;$i<count($answerlist);$i++){
            $qid =$answerlist[$i]->qid;
            $fetchedqs=Question::find($qid);
            $qnlist[$i]=$fetchedqs->question;
        }
        $nestedarray=array();
        for($i=0;$i<count($answerlist);$i++){
            $nestedarray[$qnlist[$i]]=$anslist[$i];
        }
       // dd($nestedarray);
        
        return view('useranswers',compact('nestedarray','user'));
    }

}
