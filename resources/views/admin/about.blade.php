@extends('admin/master')

@section('title')
    About*
@endsection

@section('content')
    <form method='get' action='/admin/about/edit' class='generalForm confirmButton'>
        <button class='confirmButton editButton'>Edit About</button>
    </form>

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
        @if(isset($about->tenthp)){{$about->tenthp}} <br><br>@endif
    </div>
@endsection