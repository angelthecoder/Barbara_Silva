	<header id="post-header" class="wk-section">

		<div class="wk-section-wrap bs_post_section bs_section_mobil">

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

	</header>

	<section id="post-section-1" class="wk-section bs_post_section_first">

		<div class="wk-section-wrap">

			<?php if ( has_post_thumbnail() ) : ?>

				<?php   

					$featured_img_id = get_post_thumbnail_id($post->id); 					
					$featured_img_large_attr = wp_get_attachment_image_src( $featured_img_id, 'large' );
					$featured_img_thumb_attr = wp_get_attachment_image_src( $featured_img_id, 'thumbnail' );
					$featured_img_alt = get_post_meta($featured_img_id, '_wp_attachment_image_alt', true);   

				?>

				<img src="<?php echo $featured_img_large_attr[0]; ?>" width="<?php echo $featured_img_large_attr[1];?>" height="<?php echo $featured_img_large_attr[2];?>" class="attachment wk-img-responsive" title="<?php echo get_the_title( $featured_img_large_attr ); ?>" alt="<?php echo $featured_img_alt; ?>" >	

			<?php endif; ?>	

		</div>

	</section>  			

	<?php 

	/*
	*
	* Post content, sin contenedor principal,
	* Los contenedores se crean a partir de los bloques de texto
	*
	*/

	do_action( 'bs_post_content' ); ?>

	<section id="post-share" class="wk-section">

		<div class="wk-section-wrap bs_post_section">

			<?php 

			/*
			*
			* Llama al bloque de botónes para compartir
			*
			*/

			do_action( 'bs_post_share' ); ?>	

		</div>

	</section>