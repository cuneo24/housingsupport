<!DOCTYPE html>

<html lang='en' xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title id='title'>@yield('title')</title>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <script type='text/javascript' src='/js/main.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
</head>

<body>
<div id='mainwrapperfacade'></div>

<br>

<nav class='navwrapper'>
    <a class='navbutton adminnavbutton' href='/admin/directors'>Directors*</a>
    <a class='navbutton adminnavbutton' href='/admin/residences'>Residences*</a>
    <a class='navbutton adminnavbutton' href='/admin/partners'>Partners*</a>
</nav>

<br>

<section class='adminWrapper'>

    <section class='alert'>
        @if(isset($alert))
            <h2>{{$alert}}</h2>
        @endif

        @if(session('alert'))
            <h2>{{session('alert')}}</h2>
        @endif
    </section>

    @yield('content')

</section>
</body>

</html>