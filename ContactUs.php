<?php

$pageTitle = "فروشگاه لوازم خانگی | تماس با ما";


function pageMain(){
	
	global $db, $SITE_URL;
	
	$Name = $Email = $Title = $Text =  "";
	
	$style_Name_Err = $style_Email_Err = $style_Title_Err = $style_Text_Err = "";

	$text_Name_Err = $text_Email_Err = $text_Title_Err = $text_Text_Err = "";
	
	$CheckInput = 0;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		if (empty($_POST["Name"])) {
			
			$text_Name_Err = "نام و نام خانودگی خود را وارد کنید";
			$style_Name_Err = 'error';

		}else{
			$Name = test_input($_POST["Name"]);

			if (!preg_match("/^[a-zA-Z-' ض ص ث ق ف غ ع ه خ ح ج چ پ ش س ی ب ل ا ت ن م ک گ ظ ط ز ر ذ د ئ و]*$/",$Name)) {
				
				$text_Name_Err = "فقط از حروف استفاده کنید";
				$style_Name_Err = 'error';
		}else{
				$CheckInput++;
			}
	  	}
		
		
		
		if (empty($_POST["Email"])) {
			$text_Email_Err = "ایمیل خود را وارد کنید";
			$style_Email_Err = 'error';

	  	}else{
			$Email = test_input($_POST["Email"]);

			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$text_Email_Err = "ایمیل وارد شده نادرست است";
				$style_Email_Err = 'error';

		}else{
				$CheckInput++;
			}
	  	}
		
		
		if (empty($_POST["Title"])) {
			
			$text_Title_Err = "موضوع پیام را وارد کنید";
			$style_Title_Err = 'error';

		}else{
			$Title = test_input($_POST["Title"]);
			
			$CheckInput++;
		}
		
		
		
		if (empty($_POST["Text"])) {
			
			$text_Text_Err = "متن پیام را وارد کنید";
			$style_Text_Err = 'error';

		}else{
			$Text = test_input($_POST["Text"]);
			
			$CheckInput++;
		}
		
		
		if($CheckInput == 4){

			$db = new DB();

			$table = Messages::add($_POST);

			unset($db);
			
			Alert::alerts("پیام شما با موفقیت ارسال شد", "info");
		}
	}
	
	$alerts = Alert::alerts();

	include("Includes/Views/ContactUs_Form.php");
}

include "Includes/Views/templates/master_main.php";

?>

	
	
	