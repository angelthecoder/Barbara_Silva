<?php if( get_option( 'option_private_site' ) ) { if( ! is_user_logged_in() ) { get_template_part( 'wpkit/inc/login' ); return true; } }

/**
*
* Single
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*
*/

get_header(); ?>
                             
	<?php 
	/**
	*
	*  El loop para página o post. Este se incluye en el template de pagina page.php y post single.php.
	*
	* @see is_preview()
	* @see post_class()
	* @see has_post_thumbnail()
	* @see get_post_thumbnail_id()
	* @see wp_get_attachment_image_src()
	* @see get_post_meta()
	* @see the_title_attribute()
	*
	* @package WPKit
	* @author ALUMIN
	* @version WPKIT 2.0
	*/
	get_header(); ?>
	                             
		<?php if ( is_preview()) : ?><div class="site-notice"><?php echo edit_post_link('Regresa a editar'); ?></div><?php endif; ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	            <article id="post-<?php the_ID(); ?>" <?php post_class('bs_article'); ?>>

	            		<header class="bs_post_section">

	            			<div class="bs_post_section_wrap">

			        			<?php 

			        			/*
			        			*
			        			* Llama a la cabecera del post
			        			*
			        			*/

			        			do_action( 'bs_post_head' ); ?>

	            			</div>		        			

	            		</header>

	            		<section class="bs_post_section">


		        			<?php if ( has_post_thumbnail() ) : ?>

		        				<?php   

		        					$featured_img_id = get_post_thumbnail_id($post->id); 					
		        					$featured_img_large_attr = wp_get_attachment_image_src( $featured_img_id, 'large' );
		        					$featured_img_thumb_attr = wp_get_attachment_image_src( $featured_img_id, 'thumbnail' );
		        					$featured_img_alt = get_post_meta($featured_img_id, '_wp_attachment_image_alt', true);   

		        				?>

								<img src="<?php echo $featured_img_large_attr[0]; ?>" width="<?php echo $featured_img_large_attr[1];?>" height="<?php echo $featured_img_large_attr[2];?>" class="attachment wk-img-responsive" title="<?php echo get_the_title( $featured_img_large_attr ); ?>" alt="<?php echo $featured_img_alt; ?>" >	

							<?php endif; ?>	
	            			
	            		</section>    			
						

						<?php if( have_rows( 'bs_section' ) ) : while( have_rows( 'bs_section' ) ) : the_row(); ?>


							<?php if( get_row_layout() == texto ) : ?>

								<section class="bs_post_section bs_section_text">

									<div class="bs_post_section_wrap bs_post_columns">
								
										<?php the_sub_field( 'bs_section_text' ); ?>

									</div>
									
								</section>

							<?php elseif( get_row_layout() == galeria ) : ?>

								<section class="bs_post_section bs_section_gallery">

										<?php $gallery = get_sub_field( 'bs_section_gallery' ); ?>

										<?php foreach( $gallery as $image ) : ?>

											<span><img src="<?php echo $image[sizes][large] ?>"></span>

										<?php endforeach; ?>
									
								</section>

							<?php endif; ?>

						<?php endwhile; endif; ?>

						<section class="bs_post_section">

							<div class="bs_post_section_wrap ">

								<div class="bs_share_post_block">
									
									<div class="bs_title_menu bs_share_post_title">SHARE THIS ARTICLE</div>

										<div class="bs_share_post_buttons">

											<a href="#" class="bs_button_share bs_button_fb"><i class="fa fa-facebook"></i> Share</a>
											<a href="#" class="bs_button_share bs_button_tw"><i class="fa fa-twitter"></i> Tweet</a>
											<a href="#" class="bs_button_share bs_button_pin"><i class="fa fa-pinterest"></i> Pin it</a>

										</div>

									
								</div>
								
								
							</div>

						</section>

	      
				</article>

	      <?php endwhile; endif; ?>

	<?php get_footer(); ?>

<?php get_footer(); ?>