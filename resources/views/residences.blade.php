@extends ('master')

@section('title')
    Residences
@endsection

@section('content')
    <div class='pageTitle'>
        <h2 class='titlelogo' style='text-align: center;'>Residences</h2>
    </div>
    @foreach($residences as $residence)
        @if($residence->hidden != 1)
            @include('_residence')
        @endif
    @endforeach
    <br>
@endsection