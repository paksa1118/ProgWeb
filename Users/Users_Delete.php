<?php session_start(); 

include('../Includes/Settings.php');
include('../Includes/Functions.php');


if(isset($_GET['id'])){

	$db = new DB();
	
	$table = Users::delete("User_ID = {$_GET['id']}");
	
	unset($db);
	
}else{
	
	alerts("شناسه کاربر نامشخص است", "info");
}

redirect("../UserPanel/Users_List.php");

?>