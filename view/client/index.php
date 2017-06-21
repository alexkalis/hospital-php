<body style="background-color: brown">
<div class="container">
<table border="1">
      <tr>
        <th id="table">#</th>
        <th id="table">Voornaam</th>
        <th id="table">Achternaam</th>
        <th colspan="3">Actie</th>
          
      </tr>   
        
      <?php 
       foreach ($clients as $client) { ?>
      <tr>
        <td><?= $client['client_id']; ?></td>
        <td><?= $client['client_firstname']; ?></td>
        <td><?= $client['client_lastname']; ?></td>

        <td><a href="<?= URL . 'patient/index/' . $client['client_id'] ?>">Patients</td>
        <td><a href="<?= URL . 'client/edit/' . $client['client_id'] ?>">Edit</a></td>
        <td><a href="<?= URL . 'client/delete/' . $client['client_id'] ?>">Delete</a></td>
      </tr>
      <?php } ?>

    </table>
<a class="button" href="<?= URL . 'client/create/'?>" >toevoegen</a>    

  </div>  
  </body>
</html>