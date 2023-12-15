<h1>Froga taula</h1>
<table>
    <tr>
        <th>Izena</th>
        <th>Abizena</th>
    </tr>
    <tr>
        @foreach($emaitza as $item)
            <tr>
                <td>{{ $item->izena }}</td>
                <td>{{ $item->abizena }}</td>
            </tr>
        @endforeach
    </tr>
    
</table>