@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class='homedescription'>
        @if(isset($update->update))<span class='homeUpdate'>{{$update->update}}</span>
        @endif

        <em><h2 class='titlelogo' style='text-align: center;'><q>Keeping the
                    <span style='color: #ebc46a;'>lights</span> on since 1990.</q></h2></em>
        <img class='lightbulb' src='images/!donotchange/lightbulb.svg'>
        <p>
            We are a non-profit housing development corporation with a mission of providing housing and related support services to low income, homeless, and disabled individuals in the Merrimack Valley.
        </p>
        <p>
            <a class='footerbutton' href='/about'>Click here to learn more!</a>
        </p>
        <!-- remove after demo -->
        <center>
            <form method='get' action='/admin/directors'>
                <button>Click here for admin panel</button>
            </form>
        </center>

    </div>
@endsection