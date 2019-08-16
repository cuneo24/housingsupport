@extends ('master')

@section('title')
    Directors
@endsection

@section('content')
    @foreach($directors as $director)
        @include('_director')
    @endforeach
@endsection
