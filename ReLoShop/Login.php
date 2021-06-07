<?php 

$pageTitle = "ورود";


function pageMain(){
	
	global $SITE_URL;
	
	global $db;
	
	$text_Login = "";

	$Email = $Password = "";

	$Style_Eerror = $Style_Perror = "";

	$text_emailErr = $text_passErr = "";

	$CheckInput = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {



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
			$text_passErr = "کلمه عبور را وارد کنید";
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



		if($CheckInput == 2){

			$db = new DB();

			$table = Users::find("Email = '{$Email}'");

			if(isset($table[0])){

				$row = $table[0];

				if (password_verify($Password, $row['PasswordHash'])){

					Authentication::login($row['ID']);

					unset($db);

					$sql = "UPDATE Users SET Logged = 1 WHERE ID = '{$row['ID']}'";

					$db = new DB();
					$db -> Execute($sql);

					unset($db);

					redirect($SITE_URL);
				}

			}else{

				$text_Login = "اطلاعات ورود صحیح نمی باشد";
				Alert::alerts("اطلاعات ورود صحیح نمی باشد");
			}

			$alerts = Alert::alerts();
		}
	}
	
	include("../Includes/Views/Login_Form.php");
}

include "../Includes/Views/templates/ReLo/master_ReLo.php";

?>






