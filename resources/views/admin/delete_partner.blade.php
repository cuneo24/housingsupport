@extends ('admin/master')

@section('content')
    <section class='adminFormWrapper'>
        <form method='post' class='adminForm' action='/admin/partner/{{$partner->id}}/delete'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type='submit' class='confirmButton deleteButton' value='Yes'>
        </form>
        <a href='/admin/partners'>
            <button class='confirmButton editButton'>No</button>
        </a>
    </section>
    <br><br>
    @include('_partner')
@endsection