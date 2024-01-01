<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div>
    <h2>Listes des projets</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">code</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
            <th scope="col">budget</th>
            <th scope="col">date début</th>
            <th scope="col">date fin</th>
            <th scope="col">statut</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>

            @foreach($projets as $projet)
                <tr>
                    <th scope="row">{{$projet->id}}</th>
                    <td>{{$projet->code}}</td>
                    <td>{{$projet->nom}}</td>
                    <td>{{$projet->description}}</td>
                    <td>{{$projet->budget}}</td>
                    <td>{{$projet->date_debut}}</td>
                    <td>{{$projet->date_fin}}</td>
                    <td>{{$projet->statut}}</td>
                    <td>
                      <a href="{{ route('projects.edit', ['project' => $projet->id]) }}" class="btn btn-primary">Modifier</a>
                      <button class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
      </table>

      <button class="btn btn-info text-white"><a href="{{ route('projects.create') }}">Ajouter un nouveau projet</a></button>

    </div>  
</body>
</html>
