<?php

$panelName = 'User_Info';

function pageMain(){
	
	global $db, $SITE_URL, $User_ID, $FirstName, $LastName, $Tel, $Email, $State, $City;
	
	$db = new DB();

	if(! Authorization::check('UserEdit')){

		Alert::alerts("شما مجوز ویرایش حساب خود را ندارید");

		redirect("index.php");
	}


	$style_FirstName_Err = $style_LastName_Err = $style_Tel_Err = $style_Email_Err = "";

	$text_FirstName_Err = $text_LastName_Err = $text_Tel_Err = $text_Email_Err = "";

	$CheckInput = 0;



	if ($_SERVER["REQUEST_METHOD"] == "POST") {



		if (empty($_POST["FirstName"])) {
			$text_FirstName_Err = "نام نباید خالی باشد";
			$style_FirstName_Err = 'error';

		} else {
			$FirstName = test_input($_POST["FirstName"]);

			if (!preg_match("/^[a-zA-Z-' ض ص ث ق ف غ ع ه خ ح ج چ پ ش س ی ب ل ا ت ن م ک گ ظ ط ز ر ذ د ئ و]*$/",$FirstName)) {
				$text_FirstName_Err = "فقط از حروف استفاده کنید";
				$style_FirstName_Err = 'error';
		}else{
				$CheckInput++;
			}
	  }




		if (empty($_POST["LastName"])) {
			$text_LastName_Err = "نام خانودگی نباید خالی باشد";
			$style_LastName_Err = 'error';

		} else {
			$LastName = test_input($_POST["LastName"]);

			if (!preg_match("/^[a-zA-Z-' ض ص ث ق ف غ ع ه خ ح ج چ پ ش س ی ب ل ا ت ن م ک گ ظ ط ز ر ذ د ئ و]*$/",$LastName)) {
				$text_LastName_Err = "فقط از حروف استفاده کنید";
				$style_LastName_Err = 'error';
		}else{
				$CheckInput++;
			}
	  }




		if (empty($_POST["Tel"])) {
			$text_Tel_Err = "شماره تلفن همراه نباید خالی باشد";
			$style_Tel_Err = 'error';

	  } else {
			$Tel = test_input($_POST["Tel"]);

			if (!preg_match("/^09[0-9]*$/",$Tel)) {
				$text_Tel_Err = "شماره وارد شده نادرست است";
				$style_Tel_Err = 'error';

			}elseif(strlen($Tel) < 11){
				$text_Tel_Err = "شماره وارد شده نادرست است";
				$style_Tel_Err = 'error';

			}else{
				$CheckInput++;
			}
		}




		if (empty($_POST["Email"])) {
			$text_Email_Err = "ایمیل نباید خالی باشد";
			$style_Email_Err = 'error';

	  } else {
			$Email = test_input($_POST["Email"]);

			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$text_Email_Err = "ایمیل وارد شده نادرست است";
				$style_Email_Err = 'error';

		}else{
				$CheckInput++;
			}
	  }


		$State = test_input($_POST["State"]);
		$City = test_input($_POST["City"]);

	}


	if($CheckInput == 4){

		$table = Users::update($_POST, "ID = $User_ID");
	}

	unset($db);

	$alerts = Alert::alerts();
	
	include("../Includes/Views/EditUserInfo_Form.php");
}

include "../Includes/Views/templates/UserPanel/master_UserPanel.php";

$pageTitle = "پنل کاربری >> ویرایش اطلاعات کاربری";


?>


		
