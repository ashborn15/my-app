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
    <h5>Ajout projet</h5>

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
          </tr>
        </thead>
        <tbody>
            @foreach  ($create_projets as $projet)
            <p></p>
            <tr>
              <th scope="row">{{$projet->id}}</th>
              <td colspan="1">{{$projet->code}}</td>
              <td>{{$projet->nom}}</td>
              <td>{{$projet->description}}</td>
              <td>{{$projet->budget}}</td>
              <td>{{$projet->date_debut}}</td>
              <td>{{$projet->date_fin}}</td>
              <td>{{$projet->statut}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
      <a href="{{ route('projects.create') }}" class="btn btn-primary">Ajouter un nouveau projet</a>
   
</body>
</html>