@extends ('admin/master')

@section('title')
    Directors*
@endsection

@section('content')
    @foreach($directors as $director)
        @include('admin/_director')
    @endforeach
@endsection