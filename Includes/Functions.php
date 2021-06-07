<?php

include ('Alert.php');

include('DB/DB.php');

include('Security/Authentication.php');
include('Security/Authorization.php');



if( ! function_exists('get_header') ){
	
	function get_header($name = null, $path = '', $args = array()){ // 'home'
		
		get_template_part($path . 'header', $name, $args);
	}	
}

if( ! function_exists('get_sidebar') ){
	
	function get_sidebar($name = null, $path = '', $args = array()){ // 'home'
		
		get_template_part($path . 'sidebar', $name, $args);
	}	
}

if( ! function_exists('get_footer') ){
	
	function get_footer($name = null, $path = '', $args = array()){ // 'home'
		
		get_template_part($path . 'footer', $name, $args);
	}	
}

if( ! function_exists('get_template_part') ){
	
	function get_template_part($slug, $name = null, $args = array()){ // 'home'
		
		if( isset( $name ) )
			
			$name = "-{$name}"; // '-home'
		
		$__pathToTemplate = "Views/templates/{$slug}{$name}.php";
		
		if( ! isset($args) )
			
			$args = array();
		
		$args = safeScript($args);
		
		//extract($args);
		
		foreach($args as $key => $value)
			
			$$key = $value;
		
		include $__pathToTemplate;
	}	
}

//function safeScript($arg){  // against script injection
//	
//	//var_dump($arg);
//	
//	if( is_array($arg) )
//		
//		foreach($arg as $key => $value)
//			
//			$arg['key'] = safeScript($value);
//	else
//		
//		$arg = htmlspecialchars($arg);
//	
//	//var_dump($arg);
//	
//	return $arg;
//}

if( ! function_exists('view') ){
	
	function view($slug, $name = null, $args = array(), $alerts = null){ // 'home'
		
		if( isset( $name ) )
			
			$name = "-{$name}"; // '-home'
		
		$__pathToTemplate = "views/{$slug}{$name}.php";
		
		//$args = safeScript($args);
		//extract($args);
		
		if( isset($args) ) // اگر نال نیست
			
			foreach($args as $key => $value){
				
				$$key = $value;
			}
		
		include $__pathToTemplate;
	}	
}




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


if(! function_exists('alerts')){
	
	function alerts($text = '' , $type = 'error'){
		
		static $alerts = ''; // متغیر استاتیک فقط دفعه اول مقدار اولیه میگیرد
		
		if($text !== ''){ // اگر پیام جدید داریم
			
			$alerts .=  alert($text, $type);
		}
		
		elseif($alerts !== ''){
			
			$result = $alerts;
			$alerts = '';
			return $result;
		}
		else
			return false;	
	}
}






if(! function_exists('redirect')){
	
	function redirect($address = ""){
		
		header("Location: {$address}"); // دستور به مرورگر براي ريدایرکت به آدرس
		exit();
	}
}



if(! function_exists('mySessionStater')){

	function mySessionStater(){

		//if(session_status() !== PHP_SESSION_ACTIVE){
			$lifetime = 30 * 24 * 60 * 60; // 30 days

			session_set_cookie_params ( $lifetime, $path = '/', $domain = $_SERVER['HTTP_HOST'] , $secure = false , $httponly = true );

			session_start();
		//}
	}
}


if(! function_exists('test_input')){
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}


?>