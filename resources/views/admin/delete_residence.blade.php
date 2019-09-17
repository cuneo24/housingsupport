@extends ('admin/master')

@section('content')
    <section class='adminFormWrapper'>
        <form method='post' class='adminForm' action='/admin/residence/{{$residence->id}}/delete'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type='submit' class='confirmButton deleteButton' value='Yes'>
        </form>
        <form method='get' action='/admin/residences' class='adminForm'>
            <button class='confirmButton editButton'>Cancel</button>
        </form>
    </section>
    <br><br>
    @include('admin/_residence')
@endsection