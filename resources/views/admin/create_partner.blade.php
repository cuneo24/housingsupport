@extends('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Add New Partner</h2>
        <form method='post' action='store'>
            {{csrf_field()}}
            Name:<br><input type='text' name='name'><br><br>
            Logo URL:<br><input type='text' name='logo_url'><br><br>
            Website URL:<br><input type='text' name='website_url'><br><br>
            Description:<br><textarea rows='4' cols='50' name='description'></textarea><br><br>
            <input type='submit' value='Submit'>
        </form>
    </div>
@endsection