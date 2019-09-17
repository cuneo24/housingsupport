@extends ('admin/master')

@section('title')
    Partners*
@endsection

@section('content')
    <form method='get' action='/admin/partner/add' class='generalForm confirmButton'>
        <button class='confirmButton editButton'>Create New</button>
    </form>
    <br>
    <div class='dirpartwrapper'>
        @foreach($partners as $partner)
            @include('admin/_partner')
        @endforeach
    </div>
@endsection