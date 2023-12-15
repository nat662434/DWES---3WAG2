@extends('plantilla_bista')
@section ('title', 'Pagina1')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Ikasleak</title>
</head>

<body>
    @php
        $ikasleak = [
            ['izena' => 'Ane', 'adina' => 20],
            ['izena' => 'Unai', 'adina' => 22],
            ['izena' => 'Maite', 'adina' => 19],
            ['izena' => 'Gorka', 'adina' => 21],
            ['izena' => 'Leire', 'adina' => 23],
            ['izena' => 'Iker', 'adina' => 20],
            ['izena' => 'Amaia', 'adina' => 21],
            ['izena' => 'Eneko', 'adina' => 22],
            ['izena' => 'Ainhoa', 'adina' => 19],
            ['izena' => 'Jon', 'adina' => 23],
            ];

            $zbk = request()->segment(3); // conseguir en numero de la url

            // comprobar que $zbk es un numero
            $zbk = is_numeric($zbk) ? $zbk : null;
    @endphp

    @if ($zbk != null)
        <h1>{{ $zbk }} urte baino gehiago duten ikasleak</h1>
    @else
        <h1>Ikasle zerrenda</h1>
    @endif

    <table border=1>
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
        </tr>
        @foreach ($ikasleak as $ikasle)
            @if ($ikasle['adina'] > $zbk)
                <tr>
                    <td>{{ $ikasle['izena'] }}</td>
                    <td>{{ $ikasle['adina'] }}</td>
                </tr>
            @endif
        @endforeach
    </table>
</body>

</html>
@endsection