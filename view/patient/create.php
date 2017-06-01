<div class="container">
	<form action="<?= URL ?>/patient/createSave" method="post">
	
		<input class="create_input" type="text" name="firstname" placeholder="naam">
		<input class="create_input" type="text" name="lastname" placeholder="status">
	


	  <?php 
       foreach ($patients as $patient) { ?>
<select name="patient">
			<option value="species"><?= $patient['species_id']; ?></option>

</select>
	<?php } ?>
	



		<input class="button_create button1" name="data" type="submit" value="Verzenden">
</div>






	<style type="text/css">	table{	color: white;	}	th {	background-color: #E64A19; color: white;	}	a:visited {	color: green;	}	a {	color: green;}	a{color: white;}</style>