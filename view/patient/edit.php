<div class="container">
	<h1>Edit</h1>
	<form action="<?=URL?>patient/editSave" method="post">
		<input class="create_input" type="text" name="firstname" value="<?= $patient['patient_name']; ?>">
		<input class="create_input" type="text" name="lastname" value="<?= $patient['patient_status']; ?>">
		<input class="create_input" type="hidden" name="id" value="<?= $patient['patient_id']; ?>">
		<input class="create_input" type="submit" value="Verzenden">
	
	</form>

</div>