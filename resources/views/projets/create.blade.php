<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>Ajouter un nouveau projet</title>
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card p-4 col-md-6 mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h5 class="text-center mb-4">Ajouter un nouveau projet</h5>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf <!-- Ajoute le jeton CSRF pour la protection contre les attaques de type CSRF -->
            <div class="mb-3">
                <label for="code" class="form-label">Code :</label>
                <input type="text" name="code" id="code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="budget" class="form-label">Budget :</label>
                <input type="number" name="budget" id="budget" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="date_debut" class="form-label">Date début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="date_fin" class="form-label">Date fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut :</label>
                <select name="statut" id="statut" class="form-select" required>
                    <option value=0>...</option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le projet</button>
        </form>
    </div>

</body>
</html>
