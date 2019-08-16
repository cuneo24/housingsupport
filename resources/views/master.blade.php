<!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title id='title'>@yield('title') - Housing Support</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type='text/javascript' src='/js/main.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
</head>

<body>


<div id='imageShade'></div>
<div id='imageFocusDiv'>
    <img id='residenceImageFocus' src='none'>
    <img id='closeButton' src='images/closebutton.svg'>
</div>

<div id='header'>

</div>

<div id='mainwrapperfacade'></div>

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
        <a href='/residences'>
            <button class='navbutton'>Residences</button>
        </a>
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