@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Residence</h2>
        <form method='post' action='store' enctype="multipart/form-data">
            {{csrf_field()}}
            Name:<br><label><input type='text' name='name'></label><br><br>
            <label>Picture:<br><input type='file' name='picture_url'></label><br><br>
            <label>Program:<br><textarea rows='4' cols='50' name='program'></textarea></label><br><br>
            <label>Partner:<br><textarea rows='4' cols='50' name='provider'></textarea></label><br><br>
            <label>Street:<br><input type='text' name='street'></label><br><br>
            <label>City:<br><input type='text' name='city'></label><br><br>
            <label>State:<br><input type='text' name='state'></label><br><br>
            <label> ZIP:<br><input type='text' name='zip'></label><br><br>
            <label>Year Acquired:<br><input type='text' name='year_acquired'></label><br><br>
            <label>Year Built:<br><input type='text' name='year_built'></label><br><br>
            <label>Land Area:<br><input type='text' name='land_area'></label><br><br>
            <label>Living Area:<br><input type='text' name='living_area'></label><br><br>
            <label>Other:<br><textarea rows='4' cols='50' name='other'></textarea></label><br><br>
            <label>Hidden:<br><input type='checkbox' name='hidden'></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Create'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/residences';">
        </form>
    </div>
@endsection