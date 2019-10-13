@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$director->fname}} {{$director->lname}}</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <label>First name:<br><input type='text' name='fname' value='{{$director->fname}}'></label><br><br>
            <label>Last name:<br><input type='text' name='lname' value='{{$director->lname}}'></label><br><br>
            <label>Position:<br><input type='text' name='position' value='{{$director->position}}'></label><br><br>
            <label>Description:<br><textarea rows='10' cols='100' name='description'>{{$director->description}}</textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/directors';">
        </form>
    </div>
@endsection