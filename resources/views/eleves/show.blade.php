<center><h2>Gestion des élèves</h2></center>
<div>
    ID élève :  <p>{{$eleve->id}}</p>
</div>
<div>
    Nom:   <p>{{$eleve->nom}}</p>
</div>
<div>
    Prénom :  <p>{{$eleve->prenom}}</p>
</div>
<div>
    ID Club : <p>{{$eleve->id_club->}}</p>
</div>
<center><h4>Listes d'activités auquels l'élève a participé</h4></center>
<table>
    <thead>
        <tr>
            <th>ID activité</th>
            <th>Description</th>
            <th>Date début</th>
            <th>Nombre de jours</th>
        </tr>
    </thead>
    <tbody>
        @foreach($activites as $activite)
            <tr>
                <td>{{$activite->id}}</td>
                <td>{{$activite->description}}</td>
                <td>{{$activite->date_debut}}</td>
                <td>{{$activite->nb_jours}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>Nombre total des jours : {{$total_jours}}</p>