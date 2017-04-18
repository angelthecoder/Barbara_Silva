<?php 
/*
*
* Este es el menú principal.
*
* @package WPKit
* @author ALUMIN
* @version WPKIT 2.0
*/
?>

<?php 

	if( get_option( 'wk_option_library_oknav' ) ) {

		$container_class = 	'okayNav';

	} else {

		$container_class = 	'menu main-menu';

	}

	$nav_args = array(
 		'theme_location'  => 'main-menu',
 		'menu'            => '',
 		'container'       => 'nav',
 		'container_class' => $container_class,
 		'container_id'    => 'nav-main',
 		'menu_class'      => '',
 		'menu_id'         => '',
 		'echo'            => true,
 		'fallback_cb'     => 'wp_page_menu',
 		'before'          => '',
 		'after'           => '',
 		'link_before'     => '',
 		'link_after'      => '',
 		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
 		'depth'           => 0, // Cuantos niveles de jerarquía se incluirán 0 es todos. -1 imprime todos los niveles en uno mismo.
 		'walker'          => ''
	);

	wp_nav_menu( $nav_args );

      /* Para pasar el menu sin los argumentos
      wp_nav_menu( 'theme_location=header-menu' );
      */

?>
