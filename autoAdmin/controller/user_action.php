<?php
include_once '../../model/Database.php';
include_once '../class/user_records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {	
    $password = $_POST["password"];
    $passHashed = password_hash($password, PASSWORD_DEFAULT);	
	$record->name = $_POST["name"];
    $record->dealership = $_POST["dealership"];
    $record->link = $_POST["link"];
	$record->email = $_POST["email"];
	$record->vat = $_POST["vat"];
	$record->garage = $_POST["garage"];
	$record->bank = $_POST["bank"];
	$record->password = $passHashed;
	$record->addRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deactivateRecord') {
	$record->id = $_POST["id"];
	$record->deactivateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'activateRecord') {
	$record->id = $_POST["id"];
	$record->activateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>