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
Partes de post */

function post_head() {

	?>

		<div class="bs_post_head">
			
			<header class="bs_post_header">
				<h4 class="bs_post_cat"><?php echo get_the_category_list( ' • ' ); ?></h4>
				<h1 class="bs_post_title"><?php the_title(); ?></h1>
				<h6 class="bs_post_meta bs_post_meta_topline"><?php echo get_the_date( 'M j, Y ' ); ?></h6>
				<?php edit_post_link( '<span class="fa  fa-pencil-square-o" style="vertical-align: middle; margin-left: 6px;"></span>' ); ?>
			</header>


			<?php if( !is_single() || is_page() ) : ?>
				
				<section class="bs_post_excerpt">
					<?php the_excerpt(); ?>
				</section>

				<a class="bs_button_o" rel="bookmark" title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" >Continue Reading</a>

			<?php endif; ?>

			
		</div>

	<?php
}

add_action( 'bs_post_head', 'post_head' );



