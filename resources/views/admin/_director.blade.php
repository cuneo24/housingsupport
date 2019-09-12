<div class='directorBar'>
    &nbsp;<strong>{{$director->fname}} {{$director->lname}}</strong>, <em>{{$director->position}}</em>
</div>
<div class='directorInd'>
    <br>
    {{$director->description}}
    <br><br>

    <form method='get' class='adminForm' action='/admin/director/{{$director->id}}/edit'>
        <input type='submit' class='adminButton editButton' value='Edit'>
    </form>

    <form method='get' class='adminForm' action='/admin/director/{{$director->id}}/delconfirm'>
        {{csrf_field()}}
        <input type='submit' class='adminButton deleteButton' value='Delete'>
    </form>

    <br><br>
</div>