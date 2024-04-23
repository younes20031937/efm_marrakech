<center><h2>Gestion des élèves</h2></center>
<center><h4>Listes des élèves</h4></center>
<table>
    <thead>
        <tr>
            <th>ID élève</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>ID Club</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eleves as $eleve)
            <tr>
                <td>{{$eleve->id}}</td>
                <td>{{$eleve->nom}}</td>
                <td>{{$eleve->prenom}}</td>
                <td>{{$eleve->id_club}}</td>
                <td>
                    <a href="{{route('eleves.edit' , $eleve->id)}}">Modifier</a>
                    <form action="{{route('eleves.destroy' , $eleve->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Supprimer</button>
                    </form>
                    <a href="{{route('eleves.show' , $eleve->id)}}">>></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>