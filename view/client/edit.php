<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
		<input class="create_input" type="text" name="person" value="<?= $birthday['person']; ?>">
		<input class="create_input" type="text" name="day" value="<?= $birthday['day']; ?>">
		<input class="create_input" type="text" name="month" value="<?= $birthday['month']; ?>">
		<input class="create_input" type="text" name="year" value="<?= $birthday['year']; ?>">
		<input class="create_input" type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input class="create_input" type="submit" value="Verzenden">
	
	</form>

</div>