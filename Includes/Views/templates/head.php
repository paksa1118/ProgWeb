
<?php include $_SERVER['DOCUMENT_ROOT']. "/WebP/Includes/initializer.php"; ?>
 
<!doctype html>

<html>
	
<head>
	
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	
<title><?php echo $pageTitle;  if(isset($pageTitle2)){ eval($pageTitle2); }?></title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="icon" href="<?php echo Assets("Images/Icon/SiteIcon.png") ?>">

	<link rel="stylesheet" href="<?php echo Assets("CSS/Style.css") ?>" type="text/css">
	
	<link rel="stylesheet" href="<?php echo Assets("CSS/ReLoStyle.css") ?>" type="text/css">
	
	<link rel="stylesheet" href="<?php echo Assets("CSS/UserPanel_Style.css") ?>" type="text/css">
	
	<link rel="stylesheet" href="<?php echo Assets("CSS/jspc-royal_blue.css") ?>" type="text/css">
	
	<script type="text/javascript" src="<?php echo Assets("JavaScript/js-persian-cal.min.js") ?>"></script>
    
</head>