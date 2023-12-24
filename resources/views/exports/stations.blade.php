@php
    /**
     * @var \App\Models\Station[] $stations
     */
@endphp
<table>
    <thead>
    <tr>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stations as $station)
        <tr>
            <td>{{ $station->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
