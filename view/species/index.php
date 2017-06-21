<body style="background-color: brown">
<div class="container">
<table border="1">
      <tr>
        <th id="table">#</th>
        <th id="table">Beschrijving</th>
        <th colspan="3">Actie</th> 
      </tr> 
        
      <?php 
       foreach ($species  as $specie) { ?>
      <tr>
        <td><?= $specie['species_id']; ?></td>
        <td><?= $specie['species_description']; ?></td>


        <td><a href="<?= URL . 'species/edit/' . $specie['species_id'] ?>">Edit</a></td>
        <td><a href="<?= URL . 'species/delete/' . $specie['species_id'] ?>">Delete</a></td>
      </tr>
      <?php } ?>

    </table>
    <a class="button" href="<?= URL . 'species/create/'?>">toevoegen</a>
  </div> 