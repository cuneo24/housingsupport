<div class='residenceWrapper'>
    <img class='residenceImageAdmin' alt='{{$residence->name}}' src='/{{$residence->picture_url}}'>
    <div class='residenceBar'>
        <span class='residenceTitle'>{{$residence->name}}</span><br>
        <span class='twelvePXBuffer'>{{$residence->street}}, {{$residence->city}} {{$residence->state}} {{$residence->zip}}</span>
    </div>

    <div class='residenceDiv'>
        <strong>Program</strong><br>
        {{$residence->program}}<br><br>
        <strong>Provider</strong><br>
        {{$residence->provider}}<br><br>
        <strong>Other</strong><br>
        {{$residence->other}}<br><br>

        <table>
            <tr>
                <td class='residenceTable'>
                    <strong>Year Built</strong>
                </td>
                <td class='residenceTable'>
                    <strong>Year Acquired</strong>
                </td>
                <td class='residenceTable'>
                    <strong>Land Area</strong>
                </td>
                <td class='residenceTable'>
                    <strong>Living Area</strong>
                </td>
            </tr>
            <tr>
                <td class='residenceTable'>
                    {{$residence->year_built}}
                </td>
                <td class='residenceTable'>
                    {{$residence->year_acquired}}
                </td>
                <td class='residenceTable'>
                    {{$residence->land_area}} acres
                </td>
                <td class='residenceTable'>
                    {{$residence->living_area}}
                </td>
            </tr>
        </table>
        <br>

        <section class='adminFormWrapper'>
            <form method='get' class='adminForm' action='/admin/residence/{{$residence->id}}/edit'>
                <input type='submit' class='adminButton editButton' value='Edit'>
            </form>

            <form method='get' class='adminForm' action='/admin/residence/{{$residence->id}}/delconfirm'>
                <input type='submit' class='adminButton deleteButton' value='Delete'>
            </form>
        </section>

    </div>

</div>
<br>