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

	<style>		
		.bs_post_title:after{
		border-color: white;
		}
	</style>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<section class="wk-section">

				<?php if ( has_post_thumbnail() ) : ?>

					<?php  
						$featured_img_id = get_post_thumbnail_id($post->id); 					
						$featured_img_large_attr = wp_get_attachment_image_src( $featured_img_id, 'large' );
						$featured_img_url = $featured_img_large_attr[0]; 
					?>

				<?php else : ?>

					<?php $featured_img_url = get_template_directory_uri() . 'img/generic-thumb-inv.jpg'; ?>

				<?php endif; ?>	

				<div class="bs_post_section_bg wk-flex-item wk-flex-align-center wk-d-padding-h-200 wk-m-padding-h-30" style="background-image: url(<?php echo $featured_img_url; ?>);min-height: 100vh; background-position: top;">

					<div>

						<header class="bs_post_header" style="color: white;">
							<h4 class="bs_post_cat"><?php echo get_the_category_list( ' • ' ); ?></h4>
							<h1 class="bs_post_title"><?php the_title(); ?></h1>
							<?php edit_post_link( '<span class="fa  fa-pencil-square-o" style="vertical-align: middle; margin-left: 6px;"></span>' ); ?>
						</header>

						<section class="bs_post_excerpt" style="font-size: 32px;">
							<div class="bs_text_pink">
								<?php the_content(); ?>
							</div>
							<div style="color: #fff;">hello@barbarasilvablog.com</div>
						</section>

					</div>
					
				</div>

		</section>  		

	<?php endwhile; endif; ?>                             

<?php get_footer(); ?>