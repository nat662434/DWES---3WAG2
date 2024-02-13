<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ikasleak</title>
</head>

<body>

    <?php
    $ikasleak = [['izena' => 'Ane', 'adina' => 20], ['izena' => 'Unai', 'adina' => 22], ['izena' => 'Maite', 'adina' => 19], ['izena' => 'Gorka', 'adina' => 21], ['izena' => 'Leire', 'adina' => 23], ['izena' => 'Iker', 'adina' => 20], ['izena' => 'Amaia', 'adina' => 21], ['izena' => 'Eneko', 'adina' => 22], ['izena' => 'Ainhoa', 'adina' => 19], ['izena' => 'Jon', 'adina' => 23]];
    
    $zbk = request()->segment(3);
    ?>
    {{-- @extends('plantilla') --}}

    <h1>Ikasleak</h1>
    <table border="1">
        <tr>
            <th>Izena</th>
            <th>Adina</th>
        </tr>
        @foreach ($ikasleak as $ikasle)
            @if ($zbk < $ikasle['adina'])
                <tr>
                    <td>{{ $ikasle['izena'] }}</td>
                    <td>{{ $ikasle['adina'] }}</td>
                </tr>
            @endif
        @endforeach
    </table>

</body>

</html>
