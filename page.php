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
                             
	<?php if( have_rows( 'bs_section' ) ) : while( have_rows( 'bs_section' ) ) : the_row(); ?>

		<?php if( get_row_layout() == texto ) : ?>

			<section class="bs_post_section bs_section_text bs_section_mobil">

				<div class=" bs_post_columns">

					<?php the_sub_field( 'bs_section_text' ); ?>					

				</div>

			</section>

		<?php elseif( get_row_layout() == texto_cols ) : ?>

			<section class="bs_post_section bs_section_text bs_section_mobil">

				<div class=" wk-cols wk-children-padding-20">
					
					<div class="wk-col-2e">
						
						<?php if( get_sub_field( 'bs_section_image_left_option' ) ) : ?>
						
							<img src="<?php the_sub_field( 'bs_section_image_left' ); ?>">
						
						<?php else : ?>
						
							<?php the_sub_field( 'bs_section_text_left' ); ?>
						
						<?php endif; ?>
						
					</div>
					
					<div class="wk-col-2e">
						
						<?php if( get_sub_field( 'bs_section_image_right_option' ) ) : ?>
							
							<img src="<?php the_sub_field( 'bs_section_image_right' ); ?>">
						
						<?php else : ?>
								
							<?php the_sub_field( 'bs_section_text_right' ); ?>
						
						<?php endif; ?>					
						
					</div>				

				</div>

			</section>

		<?php elseif( get_row_layout() == galeria ) : ?>

			<section class="bs_post_section">

				<div class="bs_post_section_wrap bs_section_gallery">

					<?php $gallery = get_sub_field( 'bs_section_gallery' ); ?>

					<?php foreach( $gallery as $image ) : ?>

						<span><img src="<?php echo $image[sizes][large] ?>"></span>

					<?php endforeach; ?>

				</div>

			</section>

		<?php endif; ?>

	<?php endwhile; endif; ?>

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