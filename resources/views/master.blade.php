<!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title id='title'>@yield('title') - Housing Support</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type='text/javascript' src='/js/main.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
</head>

<body>
<div class='footerwrapper'>

    <header>
        <q><em>Housing Support, Inc. Keeping the lights on since 1990.</em></q>
    </header>

    <div id='imageShade'></div>
    <div id='imageFocusDiv'>
        <img id='residenceImageFocus'>
        <img id='closeButton' src='images/closebutton.svg'>
    </div>

    <div id='logobar'>
        <div id='circle'>
            <img id='homelogo' src='images/hsilogo.svg'>Housing Support, Inc.<br>
        </div>
    </div>

    <nav class='navwrapper'>
        <a class='navbutton' href='/'>Home</a>
        <a class='navbutton' href='/about'>About</a>
        <a class='navbutton' href='/directors'>Directors</a>
        <a class='navbutton' href='/residences'>Residences</a>
        <a class='navbutton' href='/partners'>Partners</a>
    </nav>

    <div id='mainwrapperfacade'></div>

    <div id='mainwrapper'>
        <section id='contentwrapper'>
            @yield('content')
        </section>

    </div>

    <footer>
        <div class='footernav'>
            <a class='footerbutton' href='/'>Home</a>&bull;
            <a class='footerbutton' href='/about'>About</a>&bull;
            <a class='footerbutton' href='/directors'>Directors</a>&bull;
            <a class='footerbutton' href='/residences'>Residences</a>&bull;
            <a class='footerbutton' href='/partners'>Partners</a><br>
        </div>

        &copy; {{@date('Y')}} Housing Support, Inc. All rights reserved.
    </footer>

</div>
</body>

</html>