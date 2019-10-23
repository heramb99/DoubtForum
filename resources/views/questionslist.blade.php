@extends('layout.navbar')

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
    
   

         @foreach ($queslist as $singleques) 
                  
            <div class="container ">
            <?php $key=array_search($singleques ,$queslist) ?>
              <div class="section">
                   <div class="row">
                   <?php $key=array_search($singleques,$queslist) ?>
                    <div class="col s12"><a href="{{ url('answer',['qid'=> $key]) }}" >{{$singleques}}</a></div>
                   </div>  
              </div>
              <div class="divider"></div>
            </div>
        @endforeach
@endsection