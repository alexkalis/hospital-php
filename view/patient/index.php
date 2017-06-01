<body style="background-color: ">
<div class="container">
<table border="1">
      <tr>
        <th id="table">#</th>
        <th id="table">Naam</th>
        <th id="table">Soort</th>
        <th id="table">Client</th>
        <th id="table">Status</th>
        <th colspan="3">Actie</th>
        
      </tr> 
        
      <?php 
       foreach ($patients as $patient) { ?>
      <tr>
        <td><?= $patient['patient_id']; ?></td>
        <td><?= $patient['patient_name']; ?></td> 
        <td><?= $species[$patient['species_id'] - 1]['species_description']; ?></td>
        <td><?= $patient['client_id']; ?></td>
        <td><?= $patient['patient_status']; ?></td>

        <td><a href="<?= URL . 'species/index/' . $patient['species_id']?>">Species</a></td>
        <td><a href="<?= URL . 'patient/edit/' . $patient['patient_id'] ?>">Edit</a></td>
        <td><a href="<?= URL . 'patient/delete/' . $patient['patient_id'] ?>">Delete</a></td>
      </tr>
      <?php } ?>

    </table>
    <a href="create/" class="button_index">Toevoegen</a>

  </div>
   
  
  </body> 
</html>