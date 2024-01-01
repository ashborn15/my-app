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
    <h3>Listes des zones</h3>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">libelle</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach  ($nos_zones as $zone)
            <p></p>
            <tr>
                <th scope="row">{{$zone->id}}</th>
                <td>{{$zone->libelle}}</td>
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