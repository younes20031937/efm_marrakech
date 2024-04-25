<h1>Liste des évènements</h1>
<a href="{{ route('evenements.create') }}">Nouvel évènement</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Description</th>
            <th>Date</th>
            <th>Salle</th>
            <th>Nombre de places maximal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($evenements as $evenement)
            <tr>
                <td>{{ $evenement->id }}</td>
                <td>{{ $types->titre }}</td>
                <td>{{ $evenement->description }}</td>
                <td>{{ $evenement->date }}</td>
                <td>{{ $evenement->salle }}</td>
                <td>{{ $evenement->nombres_max_places }}</td>
                <td><a href="{{ route('evenements.show', $evenement->id) }}"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
