@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$residence->name}}</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            Name:<br><input type='text' name='name' value='{{$residence->name}}'><br><br>
            Picture URL:<br><input type='text' name='picture_url' value='{{$residence->picture_url}}'><br><br>
            Program:<br><textarea rows='4' cols='50' name='program'>{{$residence->program}}</textarea><br><br>
            Provider:<br><textarea rows='4' cols='50' name='provider'>{{$residence->provider}}</textarea><br><br>
            Street:<br><input type='text' name='street' value='{{$residence->street}}'><br><br>
            City:<br><input type='text' name='city' value='{{$residence->city}}'><br><br>
            State:<br><input type='text' name='state' value='{{$residence->state}}'><br><br>
            ZIP:<br><input type='text' name='zip' value='{{$residence->zip}}'><br><br>
            Year Acquired:<br><input type='text' name='year_acquired' value='{{$residence->year_acquired}}'><br><br>
            Year Built:<br><input type='text' name='year_built' value='{{$residence->year_built}}'><br><br>
            Land Area:<br><input type='text' name='land_area' value='{{$residence->land_area}}'><br><br>
            Living Area:<br><input type='text' name='living_area' value='{{$residence->living_area}}'><br><br>
            Other:<br><textarea rows='4' cols='50' name='other'>{{$residence->other}}</textarea><br><br>
            Hidden:<br><input type='checkbox' name='hidden'
            @if($residence->hidden == '1')
                {{'checked'}}
                    @endif
            ><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/residences';">
        </form>
    </div>
@endsection