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
    <img id='residenceImageFocus'>
    <img id='closeButton' src='images/closebutton.svg'>
</div>

<header>
</header>

<div id='mainwrapperfacade'></div>

<div id='mainwrapper'>
    <div id='logobar'>
        <div id='circle'>
            <img id='homelogo' src='images/hsilogo.svg'><br>
        </div>
        <span id='titlelogo'>Housing Support</span><br>
    </div>

    <nav class='navwrapper'>
        <a class='navbutton' href='/'>Home</a>
        <a class='navbutton' href='/directors'>Directors</a>
        <a class='navbutton' href='/residences'>Residences</a>
        <a class='navbutton' href='/partners'>Partners</a>
    </nav>

    <section id='contentwrapper'>
        @yield('content')
    </section>

</div>

<footer>
</footer>

</body>

</html>