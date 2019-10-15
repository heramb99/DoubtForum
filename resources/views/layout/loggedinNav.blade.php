<html>
    <head>
        <title>Doubt Forum</title>
        <style>
            #page-container {
              position: relative;
              min-height: 100vh;
            }

            #content-wrap {
              padding-bottom: 10rem;    /* Footer height */
            }

            footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 10rem;           /* Footer height */
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
            <a href="#">Your Questions</a>
            <a href="#">Your Answers</a>
            
            
            <div class="dropdown" >
                                        <button class="dropbtn">Topics
                                            <i class="material-icons">arrow_drop_down</i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="/timeline1">Python</a>
                                            <a href="/timeline">Java</a>
                                            <a href="/timeline2">C++</a>
                                        </div>
            </div>
        
            
            <div class="w3-container">
                <div class="logoutBT">
                    <form action="{{ url('/logout') }}" method="get">
                        <button type="submit" class="">Logout</button>
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
            
            <footer>
    <div class="footcontent1">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
    <div class="footcontent2">
        <h4 class="connectheader">Connect</h4>
        <ul class="footerul">
            <li class="footerlist"><a href="#">Link1</a></li>
            <li class="footerlist"><a href="#">Link2</a></li>
            <li class="footerlist"><a href="#">Link3</a></li>
        </ul>


    </div>
    
</footer>
        </div>
    </body>
</html>