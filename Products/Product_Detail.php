<?php

$User_ID = $User_FLname = $FirstName = $LastName = $Tel = $Email = $State = $City = $Photo = $Roles_ID = '';

$pageTitle = "فروشگاه لوازم خانگی | محصول"; 


function pageMain(){
	
	global $db, $SITE_URL, $User_ID;
	
	if (isset($_GET['id'])){
	
		$db = new DB();

		$table = Products::find("ID = {$_GET['id']}");

		unset($db);

		include("../Includes/Views/Product_Detail.php");

	}else{

		alerts("شناسه محصول نامشخص است", "info");
	}
	
	
	$db = new DB();
	
	$table = Products::find("Status != 'deleted' && ID != {$_GET['id']}",'ID DESC',20);

	unset($db);

	include("../Includes/Views/Catalog2.php");
}

include $_SERVER['DOCUMENT_ROOT'] . "/WebP/Includes/Views/templates/master_main.php";

?>

	
	
	
	
	