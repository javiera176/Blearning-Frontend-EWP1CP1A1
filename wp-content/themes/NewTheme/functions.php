<?php 

	$files = glob(get_template_directory() . '/functions/*.php');

	/*Almacena en una variable $files, toda la información de la carpeta functions, 
	buscando todo archivo que tenga la extención .php*/

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}
/* Revisa cada uno de los archivos y los incorpora dentro del archivo functions.php
para ser usados*/

	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}

?>