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
    <h4>Listes des activités</h4>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">libelle</th>
            <th scope="col">budget</th>
            <th scope="col">date</th>
            <th scope="col">rapport</th>
            <th scope="col">statut</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach  ($nos_activités as $activite)
            <p></p>
            <tr>
                <th scope="row">{{$activite->id}}</th>
                <td>{{$activite->libelle}}</td>
                <td>{{$activite->budget}}</td>
                <td>{{$activite->date}}</td>
                <td>{{$activite->rapport}}</td>
                <td>{{$activite->statut}}</td>
                <td>
                  <button class="btn btn-primary">Modifier</button>
                  <button class="btn btn-danger">Supprimer</button>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
      <button class="btn btn-info text-white"><a href="{{ route('projects.create') }}">Ajouter un nouveau projet</a></button>
   
</body>
</html>