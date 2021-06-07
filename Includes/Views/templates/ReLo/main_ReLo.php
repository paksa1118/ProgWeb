
<main style="background: rgba(0,0,0,0)">
	
	<?php 
	
	if(isset($alerts)){ echo $alerts; }
	
	if(isset($pageMain)){ echo($pageMain); }
	
	if(isset($pageMain2)){ eval($pageMain2); }
	
	if(function_exists('PageMain')){ PageMain(); }
	
	?>
	
</main>