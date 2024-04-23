<center>
    <h2>Gestion des élèves</h2>
</center>
<center>
    <h4>Modifier un élève</h4>
</center>
<form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
    @csrf
    @method("PUT")
    ID élève : <input type="number" value="{{ $eleve->id }}" name="id" disabled>
    Nom : <input type="text" value="{{ $eleve->nom }}"name="nom">
    Prénom : <input type="text" value="{{ $eleve->prenom }}" name="prenom">
    ID Club :
    <select name="id_club">
        @foreach ($clubs as $club)
            <option value="{{ $club->id }}">{{ $club->id }} - {{ $club->nom }}</option>
        @endforeach
    </select>
    <button type="submit">Modifier</button>
    <a href="{{route('eleves.index')}}">
        <button type="button">Annuler</button>
    </a>
</form>
