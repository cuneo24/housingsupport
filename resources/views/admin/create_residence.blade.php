@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Residence</h2>
        <form method='post' action='store'>
            {{csrf_field()}}
            Name:<br><input type='text' name='name'><br><br>
            Picture URL:<br><input type='text' name='picture_url'><br><br>
            Program:<br><textarea rows='4' cols='50' name='program'></textarea><br><br>
            Provider:<br><textarea rows='4' cols='50' name='provider'></textarea><br><br>
            Street:<br><input type='text' name='street'><br><br>
            City:<br><input type='text' name='city'><br><br>
            State:<br><input type='text' name='state'><br><br>
            ZIP:<br><input type='text' name='zip'><br><br>
            Year Acquired:<br><input type='text' name='year_acquired'><br><br>
            Year Built:<br><input type='text' name='year_built'><br><br>
            Units:<br><input type='text' name='units'><br><br>
            Land Area:<br><input type='text' name='land_area'><br><br>
            Living Area:<br><input type='text' name='living_area'><br><br>
            Zoning:<br><input type='text' name='zoning'><br><br>
            Other:<br><textarea rows='4' cols='50' name='other'></textarea><br><br>
            Book:<br><input type='text' name='book'><br><br>
            Page:<br><input type='text' name='page'><br><br>
            Map Parcel:<br><input type='text' name='map_parcel'><br><br>
            Hidden:<br><input type='checkbox' name='hidden'><br><br>
            <input type='submit' value='Submit'>
        </form>
    </div>
@endsection