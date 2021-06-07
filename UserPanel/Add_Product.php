<?php

$panelName = 'Add_Product';

function pageMain(){
	
	global $db, $SITE_URL, $P_Title, $P_Description, $P_Number, $P_Date, $P_Price, $P_Image;

	$P_Title = $P_Description = $P_Number = $P_Date = $P_Price = $P_Image = "";

	$text_titleErr = $text_descriptionErr = $text_numberErr = $text_dateErr = $text_priceErr = $text_imageErr = $text_groupErr = "";

	$CheckInput = 0;

	//$_SERVER["REQUEST_METHOD"] == "POST"

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		if (empty($_POST["P_Title"])) {
			$text_titleErr = "برای محصول خود عنوانی قرار ندادید";
		}else{
			$P_Title = $_POST["P_Title"];
			$CheckInput ++;
		}



		if (empty($_POST["P_Description"])) {
			$text_descriptionErr = "برای محصول خود توضیحاتی قرار ندادید";
		}else{
			$P_Description = $_POST["P_Description"];
			$CheckInput ++;
		}



		if (empty($_POST["P_Number"])) {
			$text_numberErr = "تعداد محصول خود را مشخص نکردید";
		}else{
			$P_Number = $_POST["P_Number"];
			$CheckInput ++;
		}



		if (empty($_POST["P_Date"])) {
			$text_dateErr = "تاریخ ثبت محصول خود را مشخص نکردید";
		}else{
			$P_Date = $_POST["P_Date"];
			$CheckInput ++;
		}



		if (empty($_POST["P_Price"])) {
			$text_priceErr = "قیمت محصول خود را مشخص نکردید";
		}else{
			$P_Price = $_POST["P_Price"];
			$CheckInput ++;
		}




		if(!empty($_FILES['P_Image']["name"])){


			$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/WebP/Assets/Uploads/Products_Image/";

			$target_file = $target_dir . basename($_FILES["P_Image"]["name"]);

			$uploadOk = 1;

			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



			$check = getimagesize($_FILES["P_Image"]["tmp_name"]);

				if($check !== false) {

	//			echo "File is an image - " . $check["mime"] . ".";

				$uploadOk = 1;

				}else {

					$text_imageErr = "فایل انتخاب شده از نوع عکس نمی باشد";

					$uploadOk = 0;
				}


			if (file_exists($target_file)) {

				$target_file = $target_dir . basename($_FILES["P_Image"]["name"] . "_(qwertasdf)");
			}


			if ($_FILES["P_Image"]["size"] > 100000) {

			 $text_imageErr = "سایز عکس انتخاب شده بیشتر از 100 کیلوبایت است";

			  $uploadOk = 0;
			}


			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

			  $text_imageErr = "عکس شما باید از نوع JPG یا PNG یا JPEG باشد";

			  $uploadOk = 0;
			}

			if ($uploadOk == 0) {



			} elseif (move_uploaded_file($_FILES["P_Image"]["tmp_name"], $target_file)) {

				echo "عکس مورد نظر با موفقیت آپلود شد";

				$_POST['P_Image'] = $_FILES["P_Image"]["name"];

				$P_Image = $_POST['P_Image'];

	//			redirect("../../UserPanel/Add_Product.php?image={$target_file}");

			} else {

				echo "عکس مورد نظر شما آپلود نشد";
			}

		}else{
			$text_imageErr = "برای محصول خود تصویر وارد کنید";
		}

		$_POST['Users_ID'] = $_SESSION["uid"];
	}





	if($CheckInput == 5){

		$db = new DB();

		Products::add($_POST);

		unset($db);
	}
	
	$alerts = Alert::alerts();
	
	include("../Includes/Views/AddProduct_Form.php");
}

include "../Includes/Views/templates/UserPanel/master_UserPanel.php";

$pageTitle = "پنل کاربری >> ثبت محصول";


?>
		
		
		


