 <?php 
session_start();

include('../Includes/Settings.php');
include('../Includes/Functions.php');

$sql = "UPDATE Users SET Logged = 0 WHERE ID = '{$_SESSION["uid"]}'";

$db = new DB();
$db -> Execute($sql);

unset($db);

Authentication::logout();

redirect($SITE_URL);

?>