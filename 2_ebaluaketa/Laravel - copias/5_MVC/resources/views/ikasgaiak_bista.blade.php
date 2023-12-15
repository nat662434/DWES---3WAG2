@extends('plantilla_bista')
@section ('title', 'Pagina1')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC - Ikasgaiak</title>
</head>
<body>
    <h1>Ikasgaiak</h1>
    <table border=1>
        <tr>
            <th>Ikasgaia ID</th>
            <th>Izena</th>
            <th>Deskribapena</th>
            <th>Ordu kopurua</th>
        </tr>
        @foreach ($emaitza as $item)
            <tr>
                <td>{{ $item->idIkasgaia }}</td>
                <td>{{ $item->izena }}</td>
                <td>{{ $item->deskribapena}}</td>
                <td>{{ $item->orduKop }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection