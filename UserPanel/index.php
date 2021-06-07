<?php 

$panelName = 'Dashboard';

function pageMain(){
	
	global $db, $SITE_URL, $User_FLname, $Tel, $Email, $State, $City;
	
	include("../Includes/Views/templates/UserPanel/main_view.php");
	
	$db = new DB();
	
	$table = Messages::find("Status != 'deleted'");

	if(Authorization::check('MessagesList')){

		include("../Includes/Views/Messages.php");
	}
}

include "../Includes/Views/templates/UserPanel/master_UserPanel.php";

$pageTitle = "پنل کاربری >> داشبورد";

?>
