@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit {{$partner->name}}</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            Name:<br><input type='text' name='name' value='{{$partner->name}}'><br><br>
            Website URL:<br><input type='text' name='website_url' value='{{$partner->website_url}}'><br><br>
            Description:<br><textarea rows='10' cols='100' name='description'>{{$partner->description}}</textarea><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button' class='confirmButton editButton' value='Cancel' onclick="location.href='/admin/partners';">
        </form>
    </div>
@endsection