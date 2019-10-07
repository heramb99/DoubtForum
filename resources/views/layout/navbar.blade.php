<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT UPDATES</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/headerFooter.css">



    <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<nav class="homepagenav">

<div class="logo">
 <a href="/">FORUM</a>
</div>
    <div class="navmenu">
                <div class="dropdown">
                        <button class="dropbtn">Fields
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/timeline1">Python</a>
                            <a href="/timeline">Java</a>
                            <a href="/timeline2">C++</a>
                        </div>
                </div>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </form>
                 </div>
        
    </div>
</nav>

@yield('content')

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
</body>
</html>

