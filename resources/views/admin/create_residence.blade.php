@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Residence</h2>
        <form method='post' action='store' enctype="multipart/form-data">
            {{csrf_field()}}
            Name:<br><input type='text' name='name'><br><br>

            Picture:<br><input type='file' name='picture_url'><br><br>

            Program:<br><textarea rows='4' cols='50' name='program'></textarea><br><br>
            Provider:<br><textarea rows='4' cols='50' name='provider'></textarea><br><br>
            Street:<br><input type='text' name='street'><br><br>
            City:<br><input type='text' name='city'><br><br>
            State:<br><input type='text' name='state'><br><br>
            ZIP:<br><input type='text' name='zip'><br><br>
            Year Acquired:<br><input type='text' name='year_acquired'><br><br>
            Year Built:<br><input type='text' name='year_built'><br><br>
            Land Area:<br><input type='text' name='land_area'><br><br>
            Living Area:<br><input type='text' name='living_area'><br><br>
            Other:<br><textarea rows='4' cols='50' name='other'></textarea><br><br>
            Hidden:<br><input type='checkbox' name='hidden'><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/residences';">
        </form>
    </div>
@endsection