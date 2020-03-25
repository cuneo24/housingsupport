@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class='homedescription'>
        @if($update->update != '')<span class='homeUpdate'>{{$update->update}}</span>
        @else<br>
        @endif

        <div id='corona'>
            <p>
                <strong>Dear Valued Housing Support Inc. Partner:</strong><br>

                HSI is closely monitoring developments with respect to COVID-19, including information and guidance published by the State of Massachusetts and Federal Government healthcare authorities.

                Effective March 24th, in order to prevent the further spread of COVID-19, our staff will be working off site and working remotely to the extent possible. During this time, HSI will be considered an essential business. As a non-exempt entity we will be responding to emergency calls only. No routine maintenance will be undertaken between today and April 8, 2020. Further updates will be provided to our partners via email and updated notices on or website at <a href='https://www.housingsupport.org'>www.housingsupport.org</a>.

                We encourage you to continue to check this page for the latest information.

                Thank you for your continued partnership as we all work hard to navigate through these challenging times, while continuing to serve our residents. We will communicate updates to our plans and notify you of changes to the availability of our services.
                <br>
                Thank you again,
                <br>
                <em>Paula Newcomb, Executive Director</em>
            </p>
        </div>
        <em><h2 class='titlelogo' style='text-align: center;'><q>Keeping the
                    <span style='color: #ebc46a;'>lights</span> on since 1990.</q></h2></em>
        <img class='lightbulb' src='images/!donotchange/lightbulb.svg'>
        <p>
            We are a non-profit housing development corporation with a mission of providing housing and related support services to low income, homeless, and disabled individuals in the Merrimack Valley.
        </p>

        <p>
            <a class='footerbutton' href='/about'>Click here to learn more!</a>
        </p>

    </div>
@endsection