@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Director</h2>
        <form method='post' action='store'>
            {{csrf_field()}}
            First name:<br><label><input type='text' name='fname'></label><br><br>
            Last name:<br><label><input type='text' name='lname'></label><br><br>
            Position:<br><label><input type='text' name='position'></label><br><br>
            Description:<br><label><textarea rows='4' cols='50' name='description'></textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/directors';">
        </form>
    </div>
@endsection