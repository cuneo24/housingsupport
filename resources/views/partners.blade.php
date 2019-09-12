@extends ('master')

@section('title')
    Partners
@endsection

@section('content')
    @foreach($partners as $partner)
        @include('_partner')
    @endforeach
@endsection