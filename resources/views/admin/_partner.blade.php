<div class='directorBar'>
    &nbsp;{{$partner->name}}
</div>
<div class='directorInd'>
    <br>
    {{$partner->description}}<br><br>
    <a class='partnerLink' href='{{$partner->website_url}}' target='_blank'>Visit partner website</a>
    <br><br>

    <form method='get' class='adminForm' action='/admin/partner/{{$partner->id}}/edit'>
        <input type='submit' class='adminButton editButton' value='Edit'>
    </form>

    <form method='get' class='adminForm' action='/admin/partner/{{$partner->id}}/delconfirm'>
        <input type='submit' class='adminButton deleteButton' value='Delete'>
    </form>

    <br><br>
</div>