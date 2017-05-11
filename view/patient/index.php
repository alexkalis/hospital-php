<body style="background-color: brown">
<div class="container">
<table border="1">
      <tr>
        <th id="table">#</th>
        <th id="table">Naam</th>
        <th id="table">Soort</th>
        <th id="table">Client</th>
        <th id="table">Status</th>
        <th colspan="2">Actie</th>
        
      </tr> 
        
      <?php 
       foreach ($patients as $patient) { ?>
      <tr>
        <td><?= $patient['patient_id']; ?></td>
        <td><?= $patient['patient_name']; ?></td>
        <td><?= $patient['species_id']; ?></td>
        <td><?= $patient['client_id']; ?></td>
        <td><?= $patient['patient_status']; ?></td>

        <td><a href="<?= URL . 'patients/edit/' . $patient['patient_id'] ?>">Edit</a></td>
        <td><a href="<?= URL . 'view/patients/delete/' . $patient['client_id'] ?>">Delete</a></td>
      </tr>
      <?php } ?>

    </table>
    <a href="../view/patients/create.php" class="button_index">Toevoegen</a>

  </div>
   
  
  </body>
</html>