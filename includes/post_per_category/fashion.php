<section class="bs_post_section bs_post_section_first">

	<?php if ( has_post_thumbnail() ) : ?>

		<?php  
			$featured_img_id = get_post_thumbnail_id($post->id); 					
			$featured_img_large_attr = wp_get_attachment_image_src( $featured_img_id, 'large' );
			$featured_img_url = $featured_img_large_attr[0]; 
		?>

	<?php else : ?>

		<?php $featured_img_url = get_template_directory_uri() . 'img/generic-thumb-inv.jpg'; ?>

	<?php endif; ?>	

	<div class="bs_post_section_bg wk-flex-item wk-flex-align-end" style="background-image: url(<?php echo $featured_img_url; ?>)">
			
		<div class="bs_post_section_wrap">

			<?php 

			/*
			*
			* Llama a la cabecera del post
			*
			*/

			do_action( 'bs_post_head' ); ?>

		</div>
		
	</div>
	
</section>  		

<?php if( have_rows( 'bs_section' ) ) : while( have_rows( 'bs_section' ) ) : the_row(); ?>

	<?php if( get_row_layout() == texto ) : ?>

		<section class="bs_post_section bs_section_text bs_section_mobil">

			<div class="bs_post_section_wrap bs_post_columns">
		
				<?php the_sub_field( 'bs_section_text' ); ?>					

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

