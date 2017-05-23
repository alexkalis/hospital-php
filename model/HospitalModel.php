<?php
function getAllClients()
	{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;	
	return $query->fetchAll();
}

function getClient($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}

function getallpatientsbyclient($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}

function editClient($id)
{
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null ;
	$client_id = isset($_POST ['client_id']) ? $_POST['client_id']: null;
	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0) 
	{
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "UPDATE clients 	SET client_firstname = :firstname,	client_lastname = :lastname WHERE client_id = :id";
	$query = $db-> prepare($sql);
	$query->execute(array(

	':firstname' => $client_firstname,
	':lastname' => $client_lastname,
	':id' => $client_id
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
	$sql = "DELETE FROM clients WHERE client_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createClient()
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] :null ;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null ;
	if (strlen ($firstname) == 0 || strlen($lastname) == 0 ) {
		return false;
	}
	$db = openDatabaseConnection();						
	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:firstname, :lastname)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname));
	$db = null;
	
	return true;
}

