@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Partner</h2>
        <form method='post' action='store'>
            {{csrf_field()}}
            Name:<br><label><input type='text' name='name'></label><br><br>
            Website URL:<br><label><input type='text' name='website_url'></label><br><br>
            Description:<br><label><textarea rows='4' cols='50' name='description'></textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/partners';">
        </form>
    </div>
@endsection