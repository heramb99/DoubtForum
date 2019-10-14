@extends('layout.loggedinNav')

@section('content')

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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


<div class="container">

<form action="{{ url('/addquestion') }}" method="post">

    @csrf 
 


    <div class="container">
    <label for="question" style="color:black">Question:</label>
    <input type="text" name="question" id="question" style="width:80%;" >
    </div>

    
    <div>
    <div class="input-field container">
    <label for="question" style="color:black">Type</label>
    <select name="field">
      <option value="" disabled selected>Choose your option</option>
      <option value="Python">Python</option>
      <option value="Java">Java</option>
      <option value="C++">C++</option>
    </select>
   
  </div>
    </div>
    
    <button type="submit">Submit Question</button>
</form>
</div>

@endsection