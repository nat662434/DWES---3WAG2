<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($emaitza as $item)
        <tr>
            <td>{{ $item->idIkasgaia }}</td>
            <td>{{ $item->izena }}</td>
            <td>{{ $item->deskribapena }}</td>
            <td>{{ $item->orduKop }}</td>
        </tr>
    @endforeach
</body>

</html>
