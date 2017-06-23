<div class="container">

	<form action="<?= URL ?>/patient/createSave" method="post">
	
		<input class="create_input" type="text" name="name" placeholder="naam">
		<input class="create_input" type="text" name="status" placeholder="status">	
 			
		 		<select name="species_id">
		 			<?php 
		      		 foreach ($species as $specie) { ?>
					<option value="<?= $specie['species_id'];?>"> <?= $specie['species_id'] ?></option>
					<?php } ?>
				</select>



		 		<select name="client_id">
		 			<?php 
		    		foreach ($clients as $client) { ?>
					<option value="<?= $client['client_id'];?>"> <?= $client['client_id'] ?></option>
					<?php } ?>
				

		<input class="button_create button1" name="data" type="submit" value="Verzenden">

</div>

<a href="<?= URL . 'patient/index/'?>">terug gaan</a>


