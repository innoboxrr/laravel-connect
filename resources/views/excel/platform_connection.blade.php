<table>
    <thead>
        <tr>
            @foreach($exportCols as $col)
                <th>{{ $col }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($platform_connections as $platform_connection)
            <tr>
                @foreach($exportCols as $col)
                    <td>{{ $platform_connection->$col }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>