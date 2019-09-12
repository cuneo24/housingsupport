@extends ('admin/master')

@section('content')
    <section class='adminFormWrapper'>
        <form method='post' class='adminForm' action='/admin/residence/{{$residence->id}}/delete'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type='submit' class='confirmButton deleteButton' value='Yes'>
        </form>
        <a href='/admin/residences'>
            <button class='confirmButton editButton'>No</button>
        </a>
    </section>
    <br><br>
    @include('_residence')
@endsection