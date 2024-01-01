<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>Suppression d'un projet</title>
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

    <h5>Suppression du projet</h5>

    <form action="{{ route('projects.destroy', ['project' => $projet->id]) }}" method="POST">
        @csrf
        @method('DELETE') <!-- Utilisez la méthode DELETE pour la suppression -->

        <p>Êtes-vous sûr de vouloir supprimer le projet "{{ $projet->nom }}" ?</p>

        <button type="submit" class="btn btn-danger">Supprimer le projet</button>
    </form>
</body>
</html>