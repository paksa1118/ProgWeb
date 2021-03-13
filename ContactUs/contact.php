<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه لوازم خانگی | تماس با ما</title>
	
<?php include('../Includes/Header1.php') ?>
	
	<div class="Main_Menu">
		<ul>
			<li>
				<a href="http://localhost/WebP/">
					صفحه اصلی 
				</a>
			</li>

			<li>
				<a href="http://localhost/WebP/AboutUs.php">
					درباره ما 
				</a>
			</li>

			<li>
				<a href="#">
					برند ها 
				</a>
			</li>

			<li>
				<a href="#">
					وبلاگ 
				</a>
			</li>

			<li>
				<a href="http://localhost/WebP/ContactUs.php" class="Menu_SelectH">
					تماس با ما 
				</a>
			</li>
		</ul>
	</div>
	
<?php include('../Includes/Header2.php') ?>
	
	
<main>

<?php
//var_dump($_POST);
	
include('../Includes/Settings.php');

$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME); 

$sql = "INSERT INTO contactus(Name, PhoneNum, msgTitle, msgBody)
	VALUES('{$_POST['Name']}', '{$_POST['Tel']}', '{$_POST['MsgTitle']}', '{$_POST['MsgBody']}')";

$dbc -> query($sql);
$dbc -> close();
	
include ('../Includes/functions.php');
$alert = alert('پیام شما با موفقیت ارسال شد', 'info');
	
if(isset($alert))
	echo($alert);
?>
			
	
</main>
	
<?php include('../Includes/Footer.php') ?>
	
	
	