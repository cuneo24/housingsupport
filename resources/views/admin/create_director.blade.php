@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Director</h2>
        <form method='post' action='store'>
            {{csrf_field()}}
            First name:<br><input type='text' name='fname'><br><br>
            Last name:<br><input type='text' name='lname'><br><br>
            Position:<br><input type='text' name='position'><br><br>
            Description:<br><textarea rows='4' cols='50' name='description'></textarea><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/directors';">
        </form>
    </div>
@endsection