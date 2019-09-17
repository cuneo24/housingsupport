@extends ('admin/master')

@section('content')
    <section class='adminFormWrapper'>
        <form method='post' class='adminForm' action='/admin/partner/{{$partner->id}}/delete'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type='submit' class='confirmButton deleteButton' value='Yes'>
        </form>
        <form method='get' action='/admin/partners' class='adminForm'>
            <button class='confirmButton editButton'>Cancel</button>
        </form>
    </section>
    <br><br>
    @include('_partner')
@endsection