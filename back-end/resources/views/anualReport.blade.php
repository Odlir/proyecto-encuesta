<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>EMPRESA</th>
            <th>SI RESPONDIO</th>
            <th>NO RESPONDIO</th>
            <th>TOTAL</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colegios as $c)
        <tr>
            <td>{{ $c['id'] }}</td>
            <td>{{ $c['colegio'] }}</td>
            <td>{{ $c['respondio'] }}</td>
            <td>{{ $c['noRespondio']}}</td>
            <td>{{ $c['total'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
