<head>
    <style>
        html, body{
  height: 100%;
        
}
    </style>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>             
   </head> 
@extends('layout.navbar')

@section('content')
 
<div class="container ">
  <div class="section" style="background-color:#6b85ea;text-align: center;">
       <div class="row">
        <div class="col s6 offset-s6"><h5>Question</h5></div><br><br>
        <div class="col s12"><p>&nbsp;Your question here</p></div>
       </div>  
  </div>
  <div class="divider"></div>
  <div class="section" style="background-color:#9aadf4">
       <div class="row">
        <div class="col s12"><h5>&nbsp;Answer 1</h5></div><br><br>
        <div class="col s12"><p>&nbsp;Answer 1</p></div>
       </div>  
  </div>
  <div class="divider"></div>
  <div class="section" style="background-color:#9aadf4">
       <div class="row">
        <div class="col s12"><h5>&nbsp;Answer 1</h5></div><br><br>
        <div class="col s12"><p>&nbsp;Answer 1</p></div>
       </div>  
  </div>
  <div class="divider"></div>
  <div class="section" style="background-color:#6b85ea">
       <div class="row">
           <form>
               <div class="col s12"><h5>&nbsp;Your Answer</h5></div><br><br>
               <div class="col s12" style="background-color:white"><textarea rows="50" cols="120"></textarea></div>
               <div class="col s12"><span>&nbsp;</span></div>
               &nbsp;&nbsp;&nbsp;<input type="submit" value="Post answer">
           </form>
       </div>  
  </div>
</div>



@endsection