<section class="bs_post_section bs_video_container bs_post_section_first">

	<video class="bs_video" poster="<?php the_field( 'bs_video_frame' ); ?>" controls>

		<source src="http://codecase.xyz/public/MAH01262.MP4" type="video/mp4">

	</video>

</section>

<header class="bs_post_section bs_section_mobil bs_post_section_no_padding">

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

<section class="bs_post_section bs_post_section_first">

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

		<section class="bs_post_section bs_section_text bs_section_mobil">

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

		<?php 

		/*
		*
		* Llama al bloque de botónes para compartir
		*
		*/

		do_action( 'bs_post_share' ); ?>	
		
	</div>

</section>