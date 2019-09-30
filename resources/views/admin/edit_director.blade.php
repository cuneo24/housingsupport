@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$director->fname}} {{$director->lname}}</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            First name:<br><label><input type='text' name='fname' value='{{$director->fname}}'></label><br><br>
            Last name:<br><label><input type='text' name='lname' value='{{$director->lname}}'></label><br><br>
            Position:<br><label><input type='text' name='position' value='{{$director->position}}'></label><br><br>
            Description:<br><label><textarea rows='10' cols='100' name='description'>{{$director->description}}</textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/directors';">
        </form>
    </div>
@endsection