<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */ /*Desregistra la versión de jquey incluida por defecto en wordpress usando la función 'wp_deregister_script'*/
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */ /* Registra todos los scripts que usaremos en nuestro proyecto Si se tiene un archivo que tenga una dependencia de jquery, no hay que olvidar de ponerlo en este script*/

		//wp_register_script('jQuery1', get_parent_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		 
		 

		 

		wp_register_script('jQuery', get_theme_file_uri('/assets/js/lib/jquery-3.2.1.min.js'), null, null, 'screen'); 

		 
		/*De entre los scripts tenemos: Incluye por defecto una versión de jquery que es la última versión
		Un plugin para crear sliders llamado 'flexslider
		El archivo functions.php, en el que se podrán escribir todos los códigos en javaScript'*/
		
		/* Enqueue Scripts */ /* Se llama a los script para que puedan funcionar*/
		 
		wp_enqueue_script('mainJS');
		wp_enqueue_script('jQuery');

		 
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>