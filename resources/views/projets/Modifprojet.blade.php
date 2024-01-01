<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>Modification d'un projet</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h6>Modification du projet</h6>

    <form action="{{ route('projects.update', ['project' => $projet->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilisez la méthode PUT pour la modification -->

        <label for="code">Code :</label>
        <input type="text" name="code" id="code" value="{{ $projet->code }}" required>
        <br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ $projet->nom }}" required>
        <br>
        <label for="description">Description :</label>
        <textarea name="description" id="description" rows="4" required>{{ $projet->description }}</textarea>
        <br>
        <label for="budget">Budget :</label>
        <input type="number" name="budget" id="budget" value="{{ $projet->budget }}" required>
        <br>
        <label for="date_debut">Date début :</label>
        <input type="date" name="date_debut" id="date_debut" value="{{ $projet->date_debut }}" required>
        <br>
        <label for="date_fin">Date fin :</label>
        <input type="date" name="date_fin" id="date_fin" value="{{ $projet->date_fin }}" required>
        <br>
        <label for="statut">Statut :</label>
        <select name="statut" id="statut" required>
            <option value="0" {{ $projet->statut == 0 ? 'selected' : '' }}>...</option>
            <option value="0" {{ $projet->statut == 0 ? 'selected' : '' }}>0</option>
            <option value="1" {{ $projet->statut == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $projet->statut == 2 ? 'selected' : '' }}>2</option>
        </select>
        <br>

        <button type="submit">Modifier le projet</button>
    </form>

</body>
</html>
