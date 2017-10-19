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
* Página de opciones ACF */

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Slider',
			'menu_title'	=> 'Slider',
			'menu_slug' 	=> 'slider',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url'		=> 'dashicons-marker',
			'position'		=> '4',
		));

		acf_add_options_page(array(
			'page_title' 	=> 'Redes sociales',
			'menu_title'	=> 'Redes',
			'menu_slug' 	=> 'redes-sociales',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url'		=> 'dashicons-twitter',
			'position'		=> '30',
		));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Herramientas',
		// 	'menu_title'	=> 'Herramientas',
		// 	'parent_slug'	=> 'opciones-de-panel',
		// ));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Opciones',
		// 	'menu_title'	=> 'Opciones',
		// 	'parent_slug'	=> 'options-wpkit',
		// ));

	}

/************************************************************************************************************************
* Tamaños adicionales de imagen */

		if ( function_exists( 'add_theme_support' ) ) {			
			add_image_size( 'Post feed Thumbnail', 450, 600 );
		}


/*******************************************************************************
Partes de post */

	// Post Head

		function post_head() {

			?>

				<div class="bs_post_head <?php if( has_term( 'fashion', 'category' ) and ( !is_home() ) ) : if( !get_field( 'bs_post_format_dark' ) ) : ?>bs_post_head_light<?php endif; endif; ?>">
				<div class="bs_post_head <?php if( has_term( 'bloom', 'category' ) and ( !is_home() ) ) : if( !get_field( 'bs_post_format_dark' ) ) : ?>bs_post_head_light<?php endif; endif; ?>">

					
					<header class="bs_post_header">
						<h4 class="bs_post_cat"><?php echo get_the_category_list( ' • ' ); ?></h4>
						<h1 class="bs_post_title"><?php the_title(); ?></h1><span class="bs_remate"></span>
						<h6 class="bs_post_meta bs_post_meta_topline"><?php echo get_the_date( 'M j, Y ' ); ?></h6>
						<?php edit_post_link( '<span class="fa  fa-pencil-square-o" style="vertical-align: middle; margin-left: 6px;"></span>' ); ?>
					</header>


					<?php if( !is_single() || is_page() ) : ?>
						
						<section class="bs_post_excerpt">
							<?php the_excerpt(); ?>
						</section>

						<?php if( has_term( array( 'lifestyle', 'events', 'inspiration', 'my-everyday', 'travel' ) , 'category' ) ) : $bs_button_class = 'bs_button'; else : $bs_button_class = 'bs_button_o'; endif; ?>

						<a class="<?php echo $bs_button_class; ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" >Continue Reading</a>

					<?php endif; ?>

					
				</div>

			<?php
		}

		add_action( 'bs_post_head', 'post_head' );

	// Post content

		function post_content() {
			
			if( have_rows( 'bs_section' ) ) : $n=1; while( have_rows( 'bs_section' ) ) : $n++; the_row(); ?>

				<?php if( get_row_layout() == texto ) : ?>

					<section id="post-section-<?php echo $n; ?>" class="wk-section">

						<div class="wk-section-wrap bs_post_section">

							<div class="bs_post_section_wrap bs_section_mobil bs_section_text <?php if( get_sub_field( 'bs_section_text_cols' ) ) : ?>bs_post_columns<?php endif; ?>">

								<?php the_sub_field( 'bs_section_text' ); ?>

							</div>	

						</div>

					</section>

				<?php elseif( get_row_layout() == texto_cols ) : ?>

					<section id="post-section-<?php echo $n; ?>" class="wk-section">

						<div class="wk-section-wrap bs_post_section bs_section_text">

							<div class="bs_post_section_wrap wk-cols bs_section_mobil">

								<div class="wk-col-2e wk-d-margin-r-20">

									<?php if( get_sub_field( 'bs_section_left_type' ) == 'Imagen' ) : ?>					

										<img src="<?php $image = get_sub_field( 'bs_section_left_image' ); echo $image['sizes']['Post feed Thumbnail']; ?>">						

									<?php elseif( get_sub_field( 'bs_section_left_type' ) == 'Texto' ) : ?>					

										<?php the_sub_field( 'bs_section_left_text' ); ?>

									<?php endif; ?>		

								</div>

								<div class="wk-col-2e wk-d-margin-l-20">

									<?php if( get_sub_field( 'bs_section_right_type' ) == 'Imagen' ) : ?>					

										<img src="<?php $image = get_sub_field( 'bs_section_right_image' ); echo $image['sizes']['Post feed Thumbnail']; ?>">							

									<?php elseif( get_sub_field( 'bs_section_right_type' ) == 'Texto' ) : ?>					

										<?php the_sub_field( 'bs_section_right_text' ); ?>

									<?php endif; ?>	

								</div>

							</div>		

						</div>

					</section>

				<?php elseif( get_row_layout() == galeria ) : ?>

					<section id="post-section-<?php echo $n; ?>" class="wk-section">

						<div class="wk-section-wrap bs_post_section <?php if( !has_term( array( 'fashion', 'catwalk', 'fashion-week' ), 'category' ) ) : ?>bs_section_gallery<?php endif; ?>">
							
							<?php $gallery = get_sub_field( 'bs_section_gallery' ); ?>
							
							<?php if( has_term( array( 'fashion', 'catwalk', 'fashion-week' ), 'category' ) ) : ?>
							
								<div class="bs_post_section_wrap bs_section_gallery">									
							
							<?php endif; ?>							

								<?php foreach( $gallery as $image ) : ?>

									<span><img src="<?php echo $image[sizes][large] ?>"></span>

								<?php endforeach; ?>
							
							<?php if( has_term( array( 'fashion', 'catwalk', 'fashion-week' ), 'category' ) ) : ?>							
									
								</div>
							
							<?php endif; ?>

						</div>

					</section>

				<?php endif; ?>

			<?php endwhile; endif; 

		}

		add_action( 'bs_post_content', 'post_content' );

	// Related posts 

		function related_posts() {
			
			?>

				<?php if( has_term( 'editorial', 'category' ) ) : $bs_post_section_class = 'bs_post_section'; else : $bs_post_section_class = 'bs_post_section_wrap'; endif; ?>

				<div id="related-posts" class="<?php echo $bs_post_section_class; ?>">

					<h3 class="bs_title_small">Related posts</h3>

					<?php 

						$args = array(
							'post_type'		  => 'post',
							'category_name' => '',
							'post_count'		=> 1,
						);

						$wp_query = new WP_Query( $args ); 

					?>

					<?php if( $wp_query->have_posts() ) : ?> 

						<div class="wk-cols">

							<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

								<div class="wk-col">
									
									<a href="<?php the_permalink(); ?>">
										
										<div class="bs_related_post" style="background-image: url( <?php the_post_thumbnail_url( 'thumbnail' ) ?> );">

											<h3 class="bs_title_garamond_mid"><?php the_title(); ?></h3>

										</div>
									
									</a>
									
								</div>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>

				</div>

			<?php 
			
		}

		add_action( 'bs_related_posts', 'related_posts' );

/*******************************************************************************
Partes de post */

	// Post share block

		function post_share() {

			?>

				<div class="bs_share_post_block">
					
					<div class="bs_title_menu bs_share_post_title">SHARE THIS ARTICLE</div>

					<div class="bs_share_post_buttons">

						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="bs_button_share bs_button_fb" target="_blank"><i class="fa fa-facebook"></i> Share</a>
						<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="bs_button_share bs_button_tw" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
						<a href="https://pinterest.com/pin/create/button/?url=&media=url(<?php the_post_thumbnail_url( 'thumbnail' ); ?>)&description=<?php echo get_the_excerpt(); ?>%0A" class="bs_button_share bs_button_pin" target="_blank"><i class="fa fa-pinterest"></i> Pin it</a>

					</div>
					
				</div>

			<?php 

		}

		add_action( 'bs_post_share', 'post_share' );


/*******************************************************************************
What I wore shortcode */

	function what_i_whore( $atts, $content = null ) {

		ob_start(); ?>

		<p>
			<table class="bs_what-i-whore">
				<caption style="text-align: left;" class="bs_what">What I Whore</caption>
				<?php if( have_rows( 'bs_prendas' ) ) : while( have_rows( 'bs_prendas' ) ) : the_row(); ?>
					<tr>
						<td><?php the_sub_field( 'bs_prenda' ); ?> by <span class="bs_text_pink"><?php the_sub_field( 'bs_prenda_marca' ); ?></span></td>
						
					</tr>
				<?php endwhile; endif; ?>
			</table>
			
		</p>

		<?php return ob_get_clean();
	}

	add_shortcode( 'what', 'what_i_whore' );




/*******************************************************************************
Snippets */

	// Oculta el editor de texto en posts 

		function mvandemar_remove_post_type_support() {

			remove_post_type_support( 'post', 'editor' );
			
		}

		add_action( 'init', 'mvandemar_remove_post_type_support' );








