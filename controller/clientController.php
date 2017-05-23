<?php
require(ROOT. "model/HospitalModel.php");
require(ROOT. "model/PatientModel.php");	

function index() 
{
	render ("client/index" , array (
		'patients' => getallpatientsbyclient($id),
		'clients' => getAllClients()
		));
}

function create()
{
	render("client/create");
}

function createSave()
{
	if (!createClient()) {
		header("location:" . URL . "error/index" );
		exit();
	}
	header("location:" . URL . "client/index");
}

function edit($id)
{
	render("client/edit", array (
		'client' => getClient($id)
		));
}
function editSave()
{
	if (!editClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}
function delete($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}