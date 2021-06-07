
<body>
<header>
			
<?php
	
	$User_ID = $User_FLname = $FirstName = $LastName = $Tel = $Email = $Password = $State = $City = $Photo = $Roles_ID = '';

	$db = new DB();

	if(! Authorization::check('UserPanel')){

		Alert::alerts("شما مجوز استفاده از پنل کاربری را ندارید");

		redirect($SITE_URL);
	}

	$table = Users::find("ID = {$_SESSION['uid']}");

	foreach($table as $row){

		$User_FLname = $row["FirstName"]." ".$row["LastName"];

		$User_ID = $row["ID"];

		$FirstName = $row["FirstName"]; $LastName = $row["LastName"];

		$Tel = $row["Tel"]; $Email = $row["Email"]; $Password = $row["PasswordHash"];

		$State = $row["State"]; $City = $row["City"]; $Photo = $row["Photo"];

		$Roles_ID = $row["Roles_ID"];

	}

	unset($db);
	
	$alerts = Alert::alerts();
?>

</header>
	
	
	
	
	
	
	
	
	
	
	