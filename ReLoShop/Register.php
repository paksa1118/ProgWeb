<?php

$pageTitle = "ثبت نام";


function pageMain(){
	
	global $db, $SITE_URL;
	
	$FirstName = $LastName = $Tel = $Email = $Password = $rePassword = "";

	$Style_FirstName_Err = $Style_LastName_Err = $Style_Terror = $Style_Eerror = $Style_Perror = $Style_RePerror = "";

	$text_FirstName_Err = $text_LastName_Err = $text_telErr = $text_emailErr = $text_passErr = $text_repassErr = "";

	$CheckInput = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {



		if (empty($_POST["FirstName"])) {
			$text_nameErr = "نام و نام خانودگی خود را وارد کنید";
			$Style_Nerror = 'error';

		} else {
			$FirstName = test_input($_POST["FirstName"]);

			if (!preg_match("/^[a-zA-Z-' ض ص ث ق ف غ ع ه خ ح ج چ پ ش س ی ب ل ا ت ن م ک گ ظ ط ز ر ذ د ئ و]*$/",$FirstName)) {
				$text_FirstName_Err = "فقط از حروف استفاده کنید";
				$Style_FirstName_Err = 'error';
		}else{
				$CheckInput++;
			}
	  }




		if (empty($_POST["LastName"])) {
			$text_nameErr = "نام و نام خانودگی خود را وارد کنید";
			$Style_Nerror = 'error';

		} else {
			$LastName = test_input($_POST["LastName"]);

			if (!preg_match("/^[a-zA-Z-' ض ص ث ق ف غ ع ه خ ح ج چ پ ش س ی ب ل ا ت ن م ک گ ظ ط ز ر ذ د ئ و]*$/",$LastName)) {
				$text_LastName_Err = "فقط از حروف استفاده کنید";
				$Style_LastName_Err = 'error';
		}else{
				$CheckInput++;
			}
	  }




		if (empty($_POST["Tel"])) {
			$text_telErr = "شماره تلفن همراه خود را وارد کنید";
			$Style_Terror = 'error';

	  } else {
			$Tel = test_input($_POST["Tel"]);

			if (!preg_match("/^09[0-9]*$/",$Tel)) {
				$text_telErr = "شماره وارد شده نادرست است";
				$Style_Terror = 'error';

			}elseif(strlen($Tel) < 11){
				$text_telErr = "شماره وارد شده نادرست است";
				$Style_Terror = 'error';

			}else{
				$CheckInput++;
			}
		}




		if (empty($_POST["Email"])) {
			$text_emailErr = "ایمیل خود را وارد کنید";
			$Style_Eerror = 'error';

	  	}else{
			$Email = test_input($_POST["Email"]);

			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$text_emailErr = "ایمیل وارد شده نادرست است";
				$Style_Eerror = 'error';

		}else{
				$CheckInput++;
			}
	  	}





		if (empty($_POST["Password"])) {
			$text_passErr = "کلمه عبور مورد نظر را وارد کنید";
			$Style_Perror = 'error';

	  } else {	
			$Password = $_POST["Password"];

			if (strlen($Password) < 8) {
				$text_passErr = "کلمه عبور باید حداقل 8 کاراکتر باشد";
				$Style_Perror = 'error';

			}else{
				$CheckInput++;
			}
		}





		if (empty($_POST["rePassword"])) {
			$text_repassErr = "تکرار کلمه عبور را وارد کنید";
			$Style_RePerror = 'error';

	  } else {	
			$rePassword = $_POST["rePassword"];

			if (strlen($rePassword) < 8) {
				$text_repassErr = "تکرار کلمه عبور باید حداقل 8 کاراکتر باشد";
				$Style_RePerror = 'error';

			}else{
				$CheckInput++;
			}
		}





		if($Password != $rePassword){
			$text_repassErr = "تکرار کلمه عبور با کلمه عبور یکسان نیست";
			$Style_RePerror = 'error';

		}else{
			$CheckInput++;
		}
	}



	if($CheckInput == 7){

		unset($_POST['rePassword']);

		$_POST['Roles_ID'] = 2;

		$db = new DB();

		$table = Users::find("Email = '$Email' OR Tel = '$Tel'");

		if (! isset($table[0])){

			$_POST['PasswordHash'] = password_hash($Password, PASSWORD_DEFAULT);

			unset($_POST['Password']);

			$uid = Users::add($_POST);

			Authentication::login($uid);

			redirect($SITE_URL);

		}else{

			Alert::alerts("ایمیل و شماره تماس وارد شده قبلا استفاده شده است");
		}

		$alerts = Alert::alerts();

		unset($db);
	}
	
	include("../Includes/Views/Register_Form.php");
}

include "../Includes/Views/templates/ReLo/master_ReLo.php";

?>





