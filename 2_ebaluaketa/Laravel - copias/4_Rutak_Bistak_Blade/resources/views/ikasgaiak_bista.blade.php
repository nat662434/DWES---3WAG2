@extends('plantilla_bista')
@section ('title', 'Pagina1')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Ikasgaiak</title>
</head>

<body>
    @php
        $ikasgaiak = [
            'Programazioa' => 200,
            'Web Garapena' => 160,
            'Datubaseen Diseinua' => 120,
            'Sare Administrazioa' => 140,
            'Web Aplikazioen Garapena' => 180,
            'Entornu Garapena' => 120,
            'Erabilgarritasun Teknikoak eta Ondareak' => 60,
            'Informatika Konpetentzia Laborategia' => 120,
            'Proiektua' => 40,
        ];

        $letra = strtoupper(request()->segment(3)); //coger la letra de la url
        $letra = is_string($letra) ? $letra : null;


    @endphp

    @if ($letra)
        <h1>{{ $letra }} letratik hasten diren ikasgaiak</h1>
    @else
        <h1>Ikasgai zerrenda</h1>
    @endif


    <table border=1>
        <tr>
            <th>Ikasgaia</th>
            <th>Orduak</th>
        </tr>
        @foreach ($ikasgaiak as $ikasgai => $orduak)
            @if($letra && substr($ikasgai, 0, 1) === $letra)
                <tr>
                    <td>{{ $ikasgai }}</td>
                    <td>{{ $orduak }}</td>
                </tr>
            @else
                <tr>
                    <td>{{ $ikasgai }}</td>
                    <td>{{ $orduak }}</td>
                </tr>
            @endif
        @endforeach
    </table>
</body>

</html>
@endsection