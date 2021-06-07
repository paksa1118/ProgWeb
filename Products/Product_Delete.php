<?php include('../Includes/initializer.php');

$db = new DB();

if(! Authorization::check('ProductDelete')){

	Alert::alerts("شما مجوز حذف محصول خود را ندارید");

	redirect("../UserPanel/");

}

if(isset($_GET['id'])){
	
	$table = Products::delete("ID = {$_GET['id']}");
	
	Alert::alerts("محصول با موفقیت حذف شد", "info");
	
}else{
	
	Alert::alerts("شناسه محصول نامشخص است");
}

unset($db);

$alerts = Alert::alerts();

redirect("../UserPanel/User_Products_List.php");

?>