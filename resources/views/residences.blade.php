@extends ('master')

@section('title')
    Residences
@endsection

@section('content')
    @foreach($residences as $residence)
        @if($residence->hidden != 1)
            @include('_residence')
        @endif
    @endforeach
@endsection