<?php

$panelName = 'Users_List';

function pageMain(){
	
	global $db, $SITE_URL;
	
	$db = new DB();
	
	$table = Users::find("Status != 'deleted'");

	if(Authorization::check('UsersList')){

		include("../Includes/Views/Users.php");

	}else{

		Alert::alerts("شما مجوز دیدن لیست کاربران را ندارید");

		redirect("index.php");
	}
		
	unset($db);
	
	$alerts = Alert::alerts();
}

include "../Includes/Views/templates/UserPanel/master_UserPanel.php";

$pageTitle = "پنل کاربری >> لیست کاربران";

?>



