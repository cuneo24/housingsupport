@extends('master')

@section('title')
    About
@endsection

@section('content')
    <div class='pageTitle'>
        <h1 class='titlelogo' style='text-align: center;'>About Us</h1>
    </div>
    <div id='description'>
        @if(isset($about->firstp)){{$about->firstp}} <br><br>@endif
        @if(isset($about->secondp)){{$about->secondp}} <br><br>@endif
        @if(isset($about->thirdp)){{$about->thirdp}} <br><br>@endif
        @if(isset($about->fourthp)){{$about->fourthp}} <br><br>@endif
        @if(isset($about->fifthp)){{$about->fifthp}} <br><br>@endif
        @if(isset($about->sixthp)){{$about->sixthp}} <br><br>@endif
        @if(isset($about->seventhp)){{$about->seventhp}} <br><br>@endif
        @if(isset($about->eigthp)){{$about->eigthp}} <br><br>@endif
        @if(isset($about->ninthp)){{$about->ninthp}} <br><br>@endif
        @if(isset($about->tenthp)){{$about->tenthp}}@endif
    </div>
@endsection