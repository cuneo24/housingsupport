@extends ('admin/master')

@section('title')
    Residences*
@endsection

@section('content')
    @foreach($residences as $residence)
        @include('admin/_residence')
    @endforeach
@endsection