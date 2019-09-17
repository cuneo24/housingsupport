@extends ('admin/master')

@section('title')
    Directors*
@endsection

@section('content')
    <form method='get' action='/admin/director/add' class='generalForm confirmButton'>
        <button class='confirmButton editButton'>Create New</button>
    </form>
    <br>
    <div class='dirpartwrapper'>
        @foreach($directors as $director)
            @include('admin/_director')
        @endforeach
    </div>
@endsection