@extends ('master')

@section('title')
    Directors
@endsection

@section('content')
    <div class='pageTitle'>
        <h2 class='titlelogo' style='text-align: center;'>Directors</h2>
    </div>
    <div class='dirpartwrapper'>
        @foreach($directors as $director)
            @include('_director')
        @endforeach
    </div>
    <br>
@endsection
