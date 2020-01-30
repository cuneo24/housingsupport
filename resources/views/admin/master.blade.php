<?php
$user = request()->user();
?>

        <!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title id='title'>@yield('title')</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type='text/javascript' src='/js/main.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
</head>

<body>

<div id='mainwrapperfacade'></div>

<div id='logobar'>
    <br><span class='titlelogo'>Admin Panel</span><br>
    <!-- <br><span class='titlelogo'>Housing Support</span><br> -->
</div>

<nav class='navwrapper'>
    <a class='navbutton adminnavbutton' href='/admin/home'>Home*</a>
    <a class='navbutton adminnavbutton' href='/admin/about'>About*</a>
    <a class='navbutton adminnavbutton' href='/admin/directors'>Directors*</a>
    <a class='navbutton adminnavbutton' href='/admin/residences'>Residences*</a>
    <a class='navbutton adminnavbutton' href='/admin/partners'>Partners*</a>
</nav>

<br>

<form method='POST' id='logout' action='/logout'>
    {{ csrf_field() }}
    <a id='login' href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
</form>

<br>

<section class='adminWrapper'>
    <section id='contentwrapper'>
        <section class='alertDown'>
            @if(isset($alertDown))
                <h2>{{$alertDown}}</h2>
            @endif

            @if(session('alertDown'))
                <h2>{{session('alertDown')}}</h2>
            @endif
        </section>

        <section class='alertUp'>
            @if(isset($alertUp))
                <h2>{{$alertUp}}</h2>
            @endif

            @if(session('alertUp'))
                <h2>{{session('alertUp')}}</h2>
            @endif
        </section>

        @yield('content')

    </section>

</section>
</body>

</html>