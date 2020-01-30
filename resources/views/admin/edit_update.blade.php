@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit Home Update</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <label><textarea rows='4' cols='50' name='update' >{{$update->update}}</textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/home';">
        </form>
    </div>
@endsection