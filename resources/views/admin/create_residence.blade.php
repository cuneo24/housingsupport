@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Residence</h2>
        <form method='post' action='store' enctype="multipart/form-data">
            {{csrf_field()}}
            Name:<br><label><input type='text' name='name'></label><br><br>
            Picture:<br><label><input type='file' name='picture_url'></label><br><br>
            Program:<br><label><textarea rows='4' cols='50' name='program'></textarea></label><br><br>
            Partner:<br><label><textarea rows='4' cols='50' name='provider'></textarea></label><br><br>
            Street:<br><label><input type='text' name='street'></label><br><br>
            City:<br><label><input type='text' name='city'></label><br><br>
            State:<br><label><input type='text' name='state'></label><br><br>
            ZIP:<br><label><input type='text' name='zip'></label><br><br>
            Year Acquired:<br><label><input type='text' name='year_acquired'></label><br><br>
            Year Built:<br><label><input type='text' name='year_built'></label><br><br>
            Land Area:<br><label><input type='text' name='land_area'></label><br><br>
            Living Area:<br><label><input type='text' name='living_area'></label><br><br>
            Other:<br><label><textarea rows='4' cols='50' name='other'></textarea></label><br><br>
            Hidden:<br><label><input type='checkbox' name='hidden'></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/residences';">
        </form>
    </div>
@endsection