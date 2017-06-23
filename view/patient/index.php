<a class="button" href="<?= URL . 'patient/create/'?>">toevoegen</a><h3 class="button">U bent nu bij de patienten tabel.</h3>
<div class="container">

<table border="1">
     <tr>
        <th>#</th>
        <th>Naam</th> 
        <th id="table">Status</th>
        <th>Soort</th>
        <th class="hidden">Soort Id</th>
       
        <th>Client Naam</th>
        <th>Client Id</th>
        <th colspan="3">Actie</th>
    </tr> 
        
      <?php 
       foreach ($patients as $patient) { ?>
    <tr>
        <td><?= $patient['patient_id']; ?></td>
        <td><?= $patient['patient_name']; ?></td>
         <td><?= $patient['patient_status']; ?></td>
        <td><?= $patient['species_description']; ?></td>
        <td class="hidden"><?= $patient['species_id']; ?></td> 
           
        <td><?= $patient['client_firstname']; ?> <?= $patient['client_lastname']; ?></td> 
        <td><?= $patient['client_id']; ?></td> 
      
        <td><a href="<?= URL . 'species/index/' . $patient['species_id']?>">Species</a></td>
        <td><a href="<?= URL . 'patient/edit/' . $patient['patient_id'] ?>">Edit</a></td>
        <td><a href="<?= URL . 'patient/delete/' . $patient['patient_id'] ?>">Delete</a></td>
    </tr>
      <?php } ?>

</table>


</div>
    
  
