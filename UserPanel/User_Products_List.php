<?php

$panelName = 'User_Products_List';

function pageMain(){
	
	global $db, $SITE_URL, $User_ID;
	
	$db = new DB();
	
	$table = Products::find("Users_ID = {$User_ID} AND Status != 'deleted'", "ID DESC");

	unset($db);

	include("../Includes/Views/Catalog.php");
	
	$alerts = Alert::alerts();
}

include "../Includes/Views/templates/UserPanel/master_UserPanel.php";

$pageTitle = "پنل کاربری >> لیست محصولات شما";

?>
