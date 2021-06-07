<?php

$User_ID = $User_FLname = $FirstName = $LastName = $Tel = $Email = $State = $City = $Photo = $Roles_ID = '';

$pageTitle = "فروشگاه لوازم خانگی"; 


function pageMain(){
	
	global $db, $SITE_URL, $User_ID;

	$db = new DB();

	$table = Products::find("Status != 'deleted'", "ID DESC");

	unset($db);
	
	$alerts = Alert::alerts();

	include("Includes/Views/Catalog.php");
}

include "Includes/Views/templates/master_main.php";

?>



