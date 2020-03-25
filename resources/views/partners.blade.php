@extends ('master')

@section('title')
    Partners
@endsection

@section('content')
    <div class='pageTitle'>
        <h1 class='titlelogo' style='text-align: center;'>Partners</h1>
    </div>
    <div class='dirpartwrapper'>
        @foreach($partners as $partner)
            @include('_partner')
        @endforeach
    </div>
    <br>
@endsection