<?php include('../Includes/initializer.php');



	$db = new DB();
	
	$table = Products::find();
	
	unset($db);


include("../Includes/Views/Catalog.php");
?>