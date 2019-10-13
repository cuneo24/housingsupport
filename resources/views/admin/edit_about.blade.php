@extends ('admin/master')

@section('content')
    <div class='generalForm'>
        <h2>Edit About</h2>
        <form method='post' action='update'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <label>Paragraph 1:<br><textarea rows='7'
                                             cols='100'
                                             name='firstp'>{{$about->firstp}}</textarea></label><br><br>
            <label>Paragraph 2:<br><textarea rows='7'
                                             cols='100'
                                             name='secondp'>{{$about->secondp}}</textarea></label><br><br>
            <label>Paragraph 3:<br><textarea rows='7'
                                             cols='100'
                                             name='thirdp'>{{$about->thirdp}}</textarea></label><br><br>
            <label>Paragraph 4:<br><textarea rows='7'
                                             cols='100'
                                             name='fourthp'>{{$about->fourthp}}</textarea></label><br><br>
            <label>Paragraph 5:<br><textarea rows='7'
                                             cols='100'
                                             name='fifthp'>{{$about->fifthp}}</textarea></label><br><br>
            <label>Paragraph 6:<br><textarea rows='7'
                                             cols='100'
                                             name='sixthp'>{{$about->sixthp}}</textarea></label><br><br>
            <label>Paragraph 7:<br><textarea rows='7'
                                             cols='100'
                                             name='seventhp'>{{$about->seventhp}}</textarea></label><br><br>
            <label>Paragraph 8:<br><textarea rows='7'
                                             cols='100'
                                             name='eigthp'>{{$about->eigthp}}</textarea></label><br><br>
            <label>Paragraph 9:<br><textarea rows='7'
                                             cols='100'
                                             name='ninthp'>{{$about->ninthp}}</textarea></label><br><br>
            <label>Paragraph 10:<br><textarea rows='7'
                                             cols='100'
                                             name='tenthp'>{{$about->tenthp}}</textarea></label><br><br>
            <input class='confirmButton updateButton' type='submit' value='Update'>
            <input type='button'
                   class='confirmButton editButton'
                   value='Cancel'
                   onclick="location.href='/admin/about';">
        </form>
    </div>
@endsection