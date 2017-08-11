<?php
require_once 'application/controller/view_controller.php';
require_once 'application/controller/donation_controller.php';
$controller = new view_controller();
$controller_donation = new donation_controller();

$aksi = $_GET['aksi'];
if($aksi == 'alenovan1'){
	$controller_donation->show_donation();
 }else{
 	$controller->show_home();
 }
?>

