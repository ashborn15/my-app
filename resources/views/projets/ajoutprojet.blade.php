<?php

        $sql= "select * from projet";
        $projet= mysqli_query($connection,$sql);


?>
<br>
<br>
<div class="col-md-8 offset-2">
 <table class="table table-warning">
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
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
    <?php while($ligne= mysqli_fetch_row($projet)) { ?>
             <tr>
                <th scope="row"><?php echo $ligne[0] ?></th>
                <td><?php echo $ligne[1] ?></td>
                <td><?php echo $ligne[2] ?></td>
             <td>
      <button class="btn btn-primary">Modifier</button>
      <button class="btn btn-danger">Supprimer</button>
      <button class="btn btn-warning">ajouter</button>
    </td>
    </tr>
    <?php  } ?>
  </tbody>
</table> 
</div>