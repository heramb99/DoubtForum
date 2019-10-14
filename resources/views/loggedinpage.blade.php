@extends('layout.loggedinNav')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<div class="container">
                <h1 class="center">Dashboard</h1>
             
               <div class="container">
                 <div class="section">
             
                   <!--   Icon Section   -->
                   <div class="row">
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">dns</i></h2>
                         <a href="{{ url('/register') }}"><h5 class="center">Ask</h5></a>
                         <p class="center light">Get Your Doubt Clear</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">cloud_upload</i></h2>
                         <a href="{{ url('/delete') }}"><h5 class="center">Your Question</h5></a>
             
                         <p class="center light">List Of Question Asked By You</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center"><a href='/viewreport'>Your Answers</a></h5>
             
                         <p class="center light">Answers Given By You</p>
                       </div>
                     </div>
                     
                   </div>
             
                 </div>
               </div>
</div>

@endsection