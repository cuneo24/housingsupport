@extends ('admin/master')

@section('content')
    <section class='adminFormWrapper'>
        <form method='post' action='/admin/director/{{$director->id}}/delete' class='adminForm'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type='submit' class='confirmButton deleteButton' value='Confirm'>
        </form>
        <form method='get' action='/admin/directors' class='adminForm'>
            <button class='confirmButton editButton'>Cancel</button>
        </form>
    </section>
    <br><br>
    @include('_director')
@endsection