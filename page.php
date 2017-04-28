<?php if( get_option( 'option_private_site' ) ) { if( ! is_user_logged_in() ) { get_template_part( 'wpkit/inc/login' ); return true; } }

/**
*
* Página 
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*
*/

get_header(); ?>
                             
	<?php 

	/*
	*
	* Post content, sin contenedor principal,
	* Los contenedores se crean a partir de los bloques de texto
	*
	*/

	do_action( 'bs_post_content' ); ?>

	<section class="bs_post_section">

		<div class="bs_post_section_wrap ">

			<?php 

			/*
			*
			* Llama al bloque de botónes para compartir
			*
			*/

			do_action( 'bs_post_share' ); ?>	
			
		</div>

	</section>

<?php get_footer(); ?>