@extends ('master')

@section('title')
    Directors
@endsection

@section('content')
    <div class='pageTitle'>
        <h1 class='titlelogo' style='text-align: center;'>Directors</h1>
    </div>
    <div class='dirpartwrapper'>
        @foreach($directors as $director)
            @include('_director')
        @endforeach
    </div>
    <br>
@endsection
