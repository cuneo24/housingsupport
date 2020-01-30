@extends('admin/master')

@section('title')
    Home*
@endsection

@section('content')
    <form method='get' action='/admin/home/edit' class='generalForm confirmButton'>
        <button class='confirmButton editButton'>Edit Home Update</button>
    </form>

    <div class='homedescription'>
        <span class='homeUpdate'>@if(isset($update->update)){{$update->update}}@endif</span>
    </div>
@endsection