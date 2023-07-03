<?php
include_once '../../model/Database.php';
include_once '../class/car_records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}

if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}

if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
	$record->id = $_POST["id"];
	$record->name = $_POST["name"];
    $record->esti_price = $_POST["esti_price"];
    $record->buy_price = $_POST["buy_price"];
	$record->timer = $_POST["timer"];
	$record->premium = $_POST["premium"];
    $record->offers = $_POST["offers"];
	$record->watching = $_POST["watching"];
	$record->grade = $_POST["grade"];
	$record->years = $_POST["years"];
    $record->color = $_POST["color"];
	$record->fuel = $_POST["fuel"];
	$record->doors = $_POST["doors"];
	$record->transmission = $_POST["transmission"];
    $record->engine = $_POST["engine"];
	$record->mileage = $_POST["mileage"];
	$record->comment = $_POST["car_comment"];
	$record->updateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deactivateRecord') {
	$record->id = $_POST["id"];
	$record->deactivateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'activateRecord') {
	$record->id = $_POST["id"];
	$record->activateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'rejectRecord') {
	$record->id = $_POST["id"];
	$record->rejectRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'featureRecord') {
	$record->id = $_POST["id"];
	$record->featureRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>