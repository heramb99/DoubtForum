
<head>
    <style>
        html, body{
  height: 100%;
            background-color: aquamarine;
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

<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
</script>


   </head> 

 
<div class="container ">
  <div class="section" style="background-color:#6b85ea;text-align: center;">
       <div class="row">
        <div class="col s12 "><h5>Question</h5></div><br><br>
        <div class="col s12"><p>&nbsp;{{$quest->question}}</p></div>
       </div>  
  </div>

  <ul>
      @foreach($alist as $singleanswer)
      <li>
      <?php $key=array_search($singleanswer ,$alist) ?>
         <div class="divider"></div>
         <div class="section" style="background-color:#9aadf4">
               <div class="row">
               <div class="col s12"><h5>&nbsp;Answer By {{$key}}</h5></div><br><br>
               <div class="col s12"><p>&nbsp;{{$singleanswer}}</p></div>
               </div>  
         </div>
      </li>
      @endforeach
  </ul>
    
  <div class="section" style="background-color:#6b85ea">
       <div class="row">
       <?php $qd=$quest->id ?>
           <form action="{{ url('addanswer',['qdetails'=> $qd]) }}">
           @csrf
               <div class="col s12"><h5>&nbsp;Your Answer</h5></div><br><br>
               <div class="col s12">
                   <div class="col s1">&nbsp;</div>
                   <div class="col s10" style="background-color:white">
                       <input type="text" name="postanswer" id="answer" style="width:100%;" required>
                   </div>
               </div>
               <div class="col s12"><span>&nbsp;</span></div>
               <div class="col s12">
                   <div class="col s5">&nbsp;</div>
                   <div class="col s2" style="padding:0;">
                       <input type="submit" style="display:block;width:100%;padding:0;border:none;">
                   </div>
               </div>
           </form>
       </div>  
  </div>
    
</div>



