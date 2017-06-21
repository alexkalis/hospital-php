<?php
function getPatient($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}
function createClientList()
{
	$db = openDatabaseConnection();
	$sql = "SELECT client_id FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;	
	return $query->fetchAll();
}
function getallspecie()
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;	
	return $query->fetchAll();
}


function editPatient($id)
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null ;
	$id = isset($_POST ['id']) ? $_POST['id']: null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id']: null;


	if (strlen($name) == 0 || strlen($status) == 0) 
	{
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "UPDATE patients	SET patient_name = :name, species_id = :species_id,
	patient_status = :status WHERE patient_id = :id";
	$query = $db-> prepare($sql);
	$query->execute(array(

	':name' => $name,
	':species_id' => $species_id,
	':status' => $status,
	':id' => $id
		));
	$db = null;

	return true;
}
function deletePatient($id = null)
{
	if (!$id) {
		return false;	
	}
$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createPatient()
{
	$name = isset($_POST['name']) ? $_POST['name'] :null ;
	$status = isset($_POST['status']) ? $_POST['status'] : null ;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null ;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null ;


	if (strlen ($name) == 0 || strlen($status) == 0  	) {
		return false;
	}
	$db = openDatabaseConnection();						
	$sql = "INSERT INTO patients (patient_name, patient_status, client_id, species_id) VALUES (:name, :status, :client_id, :species_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':client_id' => $client_id,
		':species_id' => $species_id,
		':status' => $status));
	$db = null;
	
	return true;
}

function getPatientsWithSpeciesDescription()
{
$db = openDatabaseConnection();

$sql = "SELECT * FROM patients INNER JOIN species ON patients.species_id = species.species_id JOIN clients ON patients.client_id = clients.client_id ORDER BY patient_id";
$query = $db->prepare($sql);
$query->execute();

$db = null;

return $query->fetchAll();
}

function patientsCreateDropdownClient()
{
	$db = openDatabaseConnection();
	$sql = "SELECT client_id FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
}
function patientsCreateDropdownSpecies()
{
	$db = openDatabaseConnection();
	$sql = "SELECT species_id FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
}