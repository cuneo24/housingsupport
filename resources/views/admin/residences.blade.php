@extends ('admin/master')

@section('title')
    Residences*
@endsection

@section('content')
    <form method='get' action='/admin/residence/add' class='generalForm confirmButton'>
        <button class='confirmButton editButton'>Create New</button>
    </form>
    <br>
    @foreach($residences as $residence)
        @include('admin/_residence')
    @endforeach
@endsection