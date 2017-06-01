<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?> client/editSave" method="post">
		<input class="create_input" type="text" name="firstname" value="<?= $client['client_firstname']; ?>">
		<input class="create_input" type="text" name="lastname" value="<?= $client['client_lastname']; ?>">
		<input class="create_input" type="hidden" name="id" value="<?= $client['client_id']; ?>">
		<input class="create_input" type="submit" value="Verzenden">
	
	</form>

</div>