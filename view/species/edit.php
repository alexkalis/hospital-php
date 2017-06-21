<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL?> species/editSave" method="post">
		<input class="create_input" type="text" name="description" value="<?= $specie['species_description']; ?>">
		<input class="create_input" type="hidden" name="id" value="<?= $specie['species_id']; ?>">
		<input class="create_input" type="submit" value="Verzenden">
	 
	</form>

</div>



