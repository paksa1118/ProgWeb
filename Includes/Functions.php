<?php

if(!function_exists('alert')){
	function alert($text, $type){
		$alert = "
				<article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
					{$text}
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</article>";
		return $alert;	
	}
}

?>