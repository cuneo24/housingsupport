<div class='residenceWrapper'>
    <img class='residenceImage' alt='{{$residence->name}}' src='/{{$residence->picture_url}}'>
    <div class='residenceBar'>
        <span class='residenceTitle'>{{$residence->name}}</span><br>
        <span class='twelvePXBuffer'>{{$residence->street}}, {{$residence->city}} {{$residence->state}} {{$residence->zip}}</span>
    </div>

    <div class='residenceDiv'>
        <strong>Program</strong><br>
        {{$residence->program}}<br><br>
        <strong>Partner</strong><br>
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
                    {{$residence->land_area}}
                </td>
                <td class='residenceTable'>
                    {{$residence->living_area}}
                </td>
            </tr>
        </table>

    </div>

</div>
<br>