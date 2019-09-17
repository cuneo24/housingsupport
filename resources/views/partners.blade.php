@extends ('master')

@section('title')
    Partners
@endsection

@section('content')
    <div class='dirpartwrapper'>
        @foreach($partners as $partner)
            @include('_partner')
        @endforeach
    </div>
    <br>
@endsection