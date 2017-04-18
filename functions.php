<?php
/*
*
*  Contiene las funciones implementadas en el template.
*
* @package WPKit
* @author ALUMIN
* @version WPKIT 2.0
*/

/*******************************************************************************
WPKit */

	include_once( get_stylesheet_directory() . '/wpkit/config.php' );


/***************************************************************************
* Página de opciones ACF *

	if( function_exists('acf_add_options_page') ) {

		// acf_add_options_page(array(
		// 	'page_title' 	=> 'Opciones',
		// 	'menu_title'	=> 'ACF Options',
		// 	'menu_slug' 	=> 'opciones-de-panel',
		// 	'capability'	=> 'edit_posts',
		// 	'redirect'		=> false,
		// 	'icon_url'		=> 'dashicons-marker',
		// ));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Herramientas',
		// 	'menu_title'	=> 'Herramientas',
		// 	'parent_slug'	=> 'opciones-de-panel',
		// ));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Opciones',
			'menu_title'	=> 'Opciones',
			'parent_slug'	=> 'options-wpkit',
		));

	}


/*******************************************************************************
Tus funciones */



