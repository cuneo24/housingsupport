<!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title id='title'>@yield('title') - Housing Support</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type="text/javascript" src='/js/main.js'></script>
</head>

<body>

<div id='header'>

</div>

<div id='mainwrapper'>

    <div id='logobar'>
        <img id='homelogo' src='images/hsilogo.svg'><br>
        <span id='titlelogo'>Housing Support</span><br>
    </div>

    <div id='navwrapper'>
        <a href='/'>
            <button class='navbutton'>Home</button>
        </a>
        <button class='navbutton'>About</button>
        <a href='/directors'>
            <button class='navbutton'>Directors</button>
        </a>
        <button class='navbutton'>Residences</button>
        <button class='navbutton'>Affiliates</button>
    </div>
    <div id='contentwrapper'>
        @yield('content')
    </div>
</div>

<div id='footer'>

</div>

</body>

</html>