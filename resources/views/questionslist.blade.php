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
         @foreach ($qno as $singleques)            
            <div class="container ">
              <div class="section">
                   <div class="row">
                    <div class="col s12"><a href="/">{{$singleques}}</a></div>
                   </div>  
              </div>
              <div class="divider"></div>
            </div>
        @endforeach
@endsection