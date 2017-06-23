<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
		<input class="create_input" type="text" name="name" value="<?= $patient['patient_name']; ?>">
		<input class="create_input" type="text" name="status" value="<?= $patient['patient_status']; ?>">
		<select name="species_id">
		 	
		 			<?php 
		    		foreach ($species as $specie) { ?>
					<option value="<?= $specie['specie_id'];?>"> <?= $specie['specie_id'] ?></option>
					<?php } ?>
		</select>
		<input class="create_input" type="hidden" name="id" value="<?= $patient['patient_id']; ?>">



		<input class="create_input" type="submit" value="Verzenden">
	
	</form>

</div>