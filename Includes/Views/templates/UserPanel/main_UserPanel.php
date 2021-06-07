
<main class="main_userPanel" onMouseMove="Stlye_Selected('<?php echo $panelName; ?>')">
	
	<div class="Panel_">
	
	<?php 
	
	if(isset($alerts)){ echo $alerts; }
	
	if(isset($pageMain)){ echo($pageMain); }
	
	if(isset($pageMain2)){ eval($pageMain2); }
	
	if(function_exists('PageMain')){ PageMain(); }
	
	?>
		
	</div>
	
</main>