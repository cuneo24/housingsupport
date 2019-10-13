@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$residence->name}}</h2>
        <form method='post' action='update' enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <label>Name:<br><input type='text' name='name' value='{{$residence->name}}'></label><br><br>
            Current Picture:<br>
            <img class='residenceImageAdmin' style='float:none;' src='/{{$residence->picture_url}}' alt='{{$residence->name}}'><br><br>
            <label>New Picture:<br><input type='file' name='picture_url'></label><br><br>
            <label>Program:<br><textarea rows='4' cols='50' name='program'>{{$residence->program}}</textarea></label><br><br>
            <label>Partner:<br><textarea rows='4' cols='50' name='provider'>{{$residence->provider}}</textarea></label><br><br>
            <label>Street:<br><input type='text' name='street' value='{{$residence->street}}'></label><br><br>
            <label>City:<br><input type='text' name='city' value='{{$residence->city}}'></label><br><br>
            <label>State:<br><input type='text' name='state' value='{{$residence->state}}'></label><br><br>
            <label>ZIP:<br><input type='text' name='zip' value='{{$residence->zip}}'></label><br><br>
            <label>Year Acquired:<br><input type='text' name='year_acquired' value='{{$residence->year_acquired}}'></label><br><br>
            <label>Year Built:<br><input type='text' name='year_built' value='{{$residence->year_built}}'></label><br><br>
            <label>Land Area:<br><input type='text' name='land_area' value='{{$residence->land_area}}'></label><br><br>
            <label>Living Area:<br><input type='text' name='living_area' value='{{$residence->living_area}}'></label><br><br>
            <label>Other:<br><textarea rows='4' cols='50' name='other'>{{$residence->other}}</textarea></label><br><br>
            <label>Hidden:<br><input type='checkbox' name='hidden'
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