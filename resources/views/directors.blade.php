@extends ('master')

@section('title')
    Directors
@endsection

@section('content')
    <div class='dirpartwrapper'>
        @foreach($directors as $director)
            @include('_director')
        @endforeach
    </div>
@endsection
