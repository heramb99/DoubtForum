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

            footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 2.5rem;            /* Footer height */
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
            <title>IT UPDATES</title>

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
            
            
            <div class="dropdown">
                                        <button class="dropbtn">Topics
                                            <i class="material-icons">arrow_drop_down</i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="/timeline1">Python</a>
                                            <a href="/timeline">Java</a>
                                            <a href="/timeline2">C++</a>
                                        </div>
            </div>
            
            
            <div class="logoutBT">
                <form action="{{ url('/logout') }}" method="get">
                    <button type="submit">Logout</button>
                </form>
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
                    <p>We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
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