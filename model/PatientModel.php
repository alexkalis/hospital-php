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
function getAllPatients()
	{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;	
	return $query->fetchAll();
}



function editClient($id)
{
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null ;
	if (strlen($patient_name) == 0 || strlen($patient_status) == 0) 
	{
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "UPDATE patients	SET patient_name = :name,
	patient_status = :status, 
	id = :id";
	$query = $db-> prepare($sql);
	$query->execute(array(

	':patient' => $patient_name,
	':status' => $patient_status,
	':id' => $patient_id
		));
	$db = null;

	return true;
}
function deleteClient($id = null)
{
	if (!$id) {
		return false;	
	}
$db = openDatabaseConnection();
	$sql = "DELETE FROM patient WHERE patient_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}

