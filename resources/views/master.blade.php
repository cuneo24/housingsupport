<!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="keywords"
          content="housing, support, inc, newburyport, haverhill, lawrence, amesbury, ma, massachusetts">
    <meta name="description" content="Housing Support, Inc. Newburyport, MA official website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id='title'>@yield('title') - Housing Support</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type='text/javascript' src='/js/main.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
</head>

<body>
<div id='mainwrapperfacade'></div>

<div class='mainwrapper'>
    <div id='headerwrapper'>
        <div id='imageShade'></div>
        <div id='imageFocusDiv'>
            <img id='residenceImageFocus'>
            <img id='closeButton' src='images/!donotchange/closebutton.svg'>
        </div>

        <div id='logobar'>

                <div id='logo'>
                    <a href='/'><img id='homelogo' src='images/!donotchange/hsilogo.svg'></a>
                    <div class='logoTextMain'><span class='logoText'>Housing Support Inc.</span>
                        <span class='logoText2'>Keeping the lights on since 1990</span></div>
                </div>
        </div>

        <nav class='navwrapper'>
            <a class='navbutton' href='/about'>About</a>
            <a class='navbutton' href='/directors'>Directors</a>
            <a class='navbutton' href='/residences'>Residences</a>
            <a class='navbutton' href='/partners'>Partners</a>
        </nav>
    </div>


    <section id='contentwrapper'>
        @yield('content')
    </section>

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
