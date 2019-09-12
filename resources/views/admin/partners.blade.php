@extends ('admin/master')

@section('title')
    Partners*
@endsection

@section('content')
    @foreach($partners as $partner)
        @include('admin/_partner')
    @endforeach
@endsection