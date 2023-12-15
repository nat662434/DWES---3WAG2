@extends('plantilla_bista')
@section ('title', 'Pagina1')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC - Irakasleak</title>
</head> 
<body>
    <h1>Irakasleak</h1>
    <table border=1>
        <tr>
            <th>Izena</th>
            <th>abizenak</th>
            <th>Kargua</th>
        </tr>
        @foreach ($emaitza as $item)
            <tr>
                <td>{{ $item->izena}}</td>
                <td>{{ $item->abizenak }}</td>
                <td>{{ $item->kargua}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection