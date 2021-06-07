<?php

	include('Settings.php');
	include('Functions.php');


	$db = new DB(false);

	if(! $softSetup){
		
	$sql_DROP_DB = "DROP DATABASE IF EXISTS {$dbName}";
		
	$result = $db -> Execute($sql_DROP_DB);

		if($result >= 0){
			Alert::alerts('دیتابیس با موفقیت حذف شد', 'info');
		}
	}


	$sql_CREATE_DB = "CREATE DATABASE IF NOT EXISTS {$dbName}
					CHARSET {$charset}
					COLLATE {$collate}";

	$result = $db -> Execute($sql_CREATE_DB);

	if($result >= 0){
		Alert::alerts('دیتابیس با موفقیت ایجاد شد', 'info');
	}
	unset($db);




	$db = new DB();

	$sql_CREATE_Table_Messages = "CREATE TABLE IF NOT EXISTS Messages(
								ID INT AUTO_INCREMENT NOT NULL ,
								Name VARCHAR(50) ,
								Email VARCHAR(100),
								Title VARCHAR(50) ,
								Text TEXT ,
								Status VARCHAR(20) ,
								PRIMARY KEY(ID)
								) ENGINE = INNODB";

	$result = $db -> Execute($sql_CREATE_Table_Messages);

	if($result >= 0){
		Alert::alerts('جدول پیام ها با موفقیت ایجاد شد', 'info');
	}



	$sql_CREATE_Table_Users = "CREATE TABLE IF NOT EXISTS Users(
								ID INT AUTO_INCREMENT NOT NULL ,
								FirstName VARCHAR(50) NOT NULL ,
								LastName VARCHAR(50) NOT NULL ,
								Tel VARCHAR(20) NOT NULL ,
								Email VARCHAR(50) NOT NULL ,
								PasswordHash VARCHAR(255) NOT NULL ,
								State VARCHAR(50) ,
								City VARCHAR(50) ,
								Photo VARCHAR(255) ,
								Roles_ID INT ,
								Logged BOOLEAN DEFAULT 0 ,
								Status VARCHAR(20) ,
								PRIMARY KEY(ID, Tel, Email) ,
								UNIQUE(Tel, Email)
								) ENGINE = INNODB";

	$result = $db -> Execute($sql_CREATE_Table_Users);

	if($result >= 0){
		
		Alert::alerts('جدول کاربران با موفقیت ایجاد شد', 'info');
	}

if (! $softSetup){

$parameters = array(
	'FirstName' => 'admin',
	'LastName'  => 'admin',
	'Tel'		=> '09111111111',
	'Email'		=> 'admin@gmail.com',
	'PasswordHash' => password_hash('12345678', PASSWORD_DEFAULT),
	'Photo'		=> Assets('Images/Icon/Default_userIcon.png'),
    'Roles_ID'  => 1
);

Users::add($parameters);
	
}


$sql_CREATE_Table_Roles = "CREATE TABLE IF NOT EXISTS Roles( 
							ID INT AUTO_INCREMENT NOT NULL,
							role VARCHAR(15),
							UserPanel BOOLEAN DEFAULT 0,
							UserAdd BOOLEAN DEFAULT 0,
							UserEdit BOOLEAN DEFAULT 0,
							UserDetails BOOLEAN DEFAULT 0,
							UserDelete BOOLEAN DEFAULT 0,
							UserEditOther BOOLEAN DEFAULT 0,
							UserDeleteOther BOOLEAN DEFAULT 0,
							UserDetailsOther BOOLEAN DEFAULT 0,
							UsersList BOOLEAN DEFAULT 0,
							ProductAdd BOOLEAN DEFAULT 0,
							ProductEdit BOOLEAN DEFAULT 0,
							ProductDelete BOOLEAN DEFAULT 0,
							ProductDetails BOOLEAN DEFAULT 0,
							ProductEditOther BOOLEAN DEFAULT 0,
							ProductDeleteOther BOOLEAN DEFAULT 0,
							ProductDetailsOther BOOLEAN DEFAULT 0,
							ProductsList BOOLEAN DEFAULT 0,
							MessagesList BOOLEAN DEFAULT 0,
							Status VARCHAR(20),
							PRIMARY KEY(ID)
							)ENGINE = INNODB";

$result = $db -> execute( $sql_CREATE_Table_Roles );

if($result >= 0)
	
	Alert::alerts('جدول نقش ها با موفقیت ایجاد شد', 'info');

if( ! $softSetup ) {
	
	$parameters = array(
		'ID'			=> 1,
		'role'			=> 'superAdmin',
		'UserPanel'		=> true,
		'UserAdd'		=> 1,
		'UserEdit'		=> 1,
		'UserDetails'	=> 1,
		'UserDelete'	=> 1,
		'UserEditOther'	=> 1,
		'UserDeleteOther'	=> 1,
		'UserDetailsOther'	=> 1,
		'UsersList'		=> 1,
		'ProductAdd'	=> 1,
		'ProductEdit'	=> 1,
		'ProductDelete'	=> 1,
		'ProductDetails'	=> 1,
		'ProductEditOther'	=> 1,
		'ProductDeleteOther'	=> 1,
		'ProductDetailsOther'	=> 1,
		'ProductsList'	=> 1,
		'MessagesList'	=> 1
	);
	
	Roles::add( $parameters );
	
	$parameters = array(
		'ID'	    	=> 2,
		'role'			=> 'normal',
		'UserPanel'		=> true,
		'UserEdit'		=> 1,
		'UserDetails'	=> 1,
		'ProductAdd'	=> 1,
		'ProductEdit'	=> 1,
		'ProductDelete'	=> 1,
		'ProductDetails'	=> 1,
		'ProductsList'	=> 1
	);
	
	Roles::add( $parameters );
}



	$sql_CREATE_Table_Products = "CREATE TABLE IF NOT EXISTS Products(
								ID INT AUTO_INCREMENT NOT NULL ,
								P_Title VARCHAR(50) NOT NULL ,
								P_Description TEXT NOT NULL ,
								P_Number INT NOT NULL ,
								P_Date VARCHAR(30) NOT NULL ,
								P_Price INT NOT NULL ,
								P_Image VARCHAR(255) NOT NULL ,
								G1 BOOLEAN DEFAULT 0 ,
								G2 BOOLEAN DEFAULT 0 ,
								G3 BOOLEAN DEFAULT 0 ,
								G4 BOOLEAN DEFAULT 0 ,
								G5 BOOLEAN DEFAULT 0 ,
								Status VARCHAR(20) ,
								Users_ID INT NOT NULL , 
								PRIMARY KEY(ID)
								) ENGINE = INNODB";

	$result = $db -> Execute($sql_CREATE_Table_Products);

	if($result >= 0){
		
		Alert::alerts('جدول محصولات با موفقیت ایجاد شد', 'info');
	}


$alerts = Alert::alerts();
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SITE SETUP >>></title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="icon" href="<?php echo Assets("Images/Icon/SiteIcon.png") ?>">

	<link rel="stylesheet" href="<?php echo Assets("CSS/Style.css") ?>" type="text/css">
	
</head>

<body>
	<?php
		if( isset($alerts) )
			echo $alerts;
	?>
	
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>




















