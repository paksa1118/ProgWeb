<?php include('../../initializer.php'); ?>

<!doctype html>

<html lang = "fa" class = "container-fluid">
	
	<head>
		
		<title><?php if( isset($title) ) echo $title; ?></title>
		
		<?php get_template_part('head', '', null); ?>
		
	</head>
	
	<body>
		
		<?php get_header(); ?>
		
		<main>
			
			<?php
			
				//main();
			
				if( isset($alerts) )
					echo $alerts;
				
				//if( isset($main) )
			
					eval( $main );
			?>
			
		</main>
		
		<?php get_sidebar(); ?>
		
		<?php get_footer(); ?>
		
		<?php get_template_part('scripts'); ?>
		
	</body>
	
</html>





