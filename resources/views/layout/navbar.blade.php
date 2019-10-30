<title>Doubt Forum</title>
<style>
            #page-container {
              position: relative;
              min-height: 100vh;
            }

            #content-wrap {
              padding-bottom: 2.5rem;    /* Footer height */
            }

            #footer{
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 2.5rem;  /* Footer height */
             /* background-color: #3e64ff;
              color: white;
              display: flex;
              align-items: center;
              box-sizing: border-box;*/
            }
    .footcontent{
              background-color: #3e64ff;
              color: white;
              display: flex;
              align-items: center;
              box-sizing: border-box;
              
    }
            
        </style>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>     
            $(document).ready(function(){
            $('.modal').modal();
            });
        </script>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/headerFooter.css">


        
    
    <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
    



<div class="topnav" >
    <a href="/">Home</a>
    <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Login</a> -->
    
        <div class="dropdown" style="padding-top:0px;">
          <ul>
            <li><a href="{{ url('/pyq') }}" >Python</a></li>
            <li><a href="{{ url('/javaq') }}">Java</a></li>
            <li><a href="{{ url('/cq') }}">C++</a></li>
          </ul>
        </div>
    
   
    <div class="nav-wrapper" >
          <form>
            <div class="input-field">
              <input id="search" type="search" required style="background-color: white;">
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
    </div>
    
    <div class="w3-container">
    
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>
        
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright w3-black">&times;</span>
                <form class="modal-content animate" action="{{ url('/login') }}" method="post">
                @csrf
                    <div class="container">
                    <label for="uname"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                        
                    <button type="submit">Login</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
                    </div>

                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- <a href="#contact">Register</a>    -->

    <div class="w3-container">
    
        <button onclick="document.getElementById('id02').style.display='block'">Register</button>

        <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright w3-black">&times;</span>
                <form class="modal-content animate" action="{{ url('/register') }}" method="get">
                @csrf
                    <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="name" required>

                    <label for="uname"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                        
                    <button type="submit">Register</button>
                    </div>

                </form>
            </div>
            </div>
        </div>
    </div>
    
</div>

<div id="page-container">
           <div id="content-wrap">
@yield('content')
</div>
<!--<div id="footer">-->
    <!--<footer>-->
<span id="footer">
   <div class="footcontent"> 
       <p style="width:100%;text-align:center;">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p> 
   </div>
    <div class="footcontent">
        <h4 class="connectheader" style="width:100%;text-align:center;">Connect</h4>
    </div>
    <div class="footcontent">
        <ul class="footerul" style="width:100%;text-align:center;">
            <li class="footerlist"><a href="#" style="color: #ffffff">Link1</a></li>
            <li class="footerlist"><a href="#" style="color: #ffffff">Link2</a></li>
        </ul>
     </div>
</span>
    
    <!--</footer>-->
<!--</div>-->
     </div>



