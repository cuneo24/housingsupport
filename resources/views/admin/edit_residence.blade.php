@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$residence->name}}</h2>
        <form method='post' action='update' enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            Name:<br><label><input type='text' name='name' value='{{$residence->name}}'></label><br><br>
            Current Picture:<br>
            <img class='residenceImageAdmin' style='float:none;' src='/{{$residence->picture_url}}' alt='{{$residence->name}}'><br><br>
            New Picture:<br><label><input type='file' name='picture_url'></label><br><br>
            Program:<br><label><textarea rows='4' cols='50' name='program'>{{$residence->program}}</textarea></label><br><br>
            Partner:<br><label><textarea rows='4' cols='50' name='provider'>{{$residence->provider}}</textarea></label><br><br>
            Street:<br><label><input type='text' name='street' value='{{$residence->street}}'></label><br><br>
            City:<br><label><input type='text' name='city' value='{{$residence->city}}'></label><br><br>
            State:<br><label><input type='text' name='state' value='{{$residence->state}}'></label><br><br>
            ZIP:<br><label><input type='text' name='zip' value='{{$residence->zip}}'></label><br><br>
            Year Acquired:<br><label><input type='text' name='year_acquired' value='{{$residence->year_acquired}}'></label><br><br>
            Year Built:<br><label><input type='text' name='year_built' value='{{$residence->year_built}}'></label><br><br>
            Land Area:<br><label><input type='text' name='land_area' value='{{$residence->land_area}}'></label><br><br>
            Living Area:<br><label><input type='text' name='living_area' value='{{$residence->living_area}}'></label><br><br>
            Other:<br><label><textarea rows='4' cols='50' name='other'>{{$residence->other}}</textarea></label><br><br>
            Hidden:<br><label><input type='checkbox' name='hidden'
            @if($residence->hidden == '1')
                {{'checked'}}
                    @endif
            ></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/residences';">
        </form>
    </div>
@endsection