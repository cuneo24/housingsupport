@extends ('master')

@section('title')
    Partners
@endsection

@section('content')
    <div class='pageTitle'>
        <h2 class='titlelogo' style='text-align: center;'>Partners</h2>
    </div>
    <div class='dirpartwrapper'>
        @foreach($partners as $partner)
            @include('_partner')
        @endforeach
    </div>
    <br>
@endsection