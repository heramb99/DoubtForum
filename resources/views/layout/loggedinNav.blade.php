<html>
    <head>
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




        <div class="topnav">
            <a href="#">Welcome {{ $user->name }}</a>
            <a href="{{ url('/ask') }}">Ask</a>
            <a href="{{ url('/fetchquestion') }}">Your Questions</a>
            <a href="{{ url('/fetchqna') }}">Your Answers</a>
            
            
            <!-- <div class="dropdown">
                                        <button class="dropbtn">Topics
                                            <i class="material-icons">arrow_drop_down</i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="/timeline1">Python</a>
                                            <a href="/timeline">Java</a>
                                            <a href="/timeline2">C++</a>
                                        </div>
            </div> -->

            <div class="dropdown" style="padding-top:0px;">
          <!--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Topics
          <span class="caret"></span></button>
          -->
            <a href="{{ url('/pyqlogged') }}" >Python</a>
            <a href="{{ url('/javaqlogged') }}">Java</a>
            <a href="{{ url('/cqlogged') }}">C++</a>
          
        </div>
          
            
        <div class="w3-container">
            <div class="logoutBT">
                <form action="{{ url('/logout') }}" method="get">
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
</div>
    </head>
    
    <body>

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
    </body>
</html>