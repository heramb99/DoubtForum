@extends('layout.loggedinNav')

@section('content')
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
    
<ul>
   @foreach($nestedarray as $qna)
    <li>
    <?php $key=array_search($qna ,$nestedarray) ?>
   <div class="container ">
  <div class="section" style="background-color:#6b85ea;text-align: center;">
       <div class="row">
        <div class="col s6 offset-s6"><h5>Question</h5></div><br><br>
        <div class="col s12"><p>&nbsp;{{$key}}</p></div>
       </div>  
  </div>


         <div class="divider"></div>
         <div class="section" style="background-color:#9aadf4">
               <div class="row">
               <div class="col s12"><h5>&nbsp;Answer</h5></div><br><br>
               <div class="col s12"><p>&nbsp;{{$qna}}</p></div>
               </div>  
         </div>
      </li>
      @endforeach
  </ul>
@endsection