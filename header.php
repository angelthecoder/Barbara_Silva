	<!DOCTYPE html>

	<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>" <?php wk_schema_global_type(); ?> class="">

		<head <?php wk_opengraph_header(); ?>>

			<?php wp_head(); ?>

			<?php // Eso es todo Puedes añadir tags a la cabecera desde aquí ?>

			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css">
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
			<!-- <link rel="stylesheet" type="text/css" href="http://localhost/wpkitui/css/wpkitui.css"> -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
			
		</head>

		<body <?php body_class('wk-wrap-1080'); ?>>
		
			<div id="wrapper">
				
				<?php 

				/*
				* Layout de widgets
				*
				* Imprime el layout de widgets en la cabezera. 
				*
				* Si no ocupas el layout de widgets, desactivalo desde el administrador
				* en WPKit / Layouts en lugar de borrar esta función, Si desactivas la opción
				* desde el administrador se seguirá imprimiendo el menú responsivo.
				*/

				//do_action( 'wk_widgets_header_layout' ); ?>

				<header id="main-header" class="wk-section <?php if( has_term( array( 'fashion', 'catwalk', 'fashion-week', 'looks', 'photo-set' ), 'category' ) && !is_home() && !is_archive ) : ?>bs_cat_fashion_menu<?php elseif( is_page( 'work-with-me' ) ) : ?>bs_cat_fashion_menu<?php endif; ?>">
					
					<div class="wk-section-wrap">						
							
							<?php if( is_home() ) : ?>
								
								<?php get_template_part( 'includes/social-bar' ); ?>
							
								<section id="bs_logo_bar" class="bs_section_mobil">
									<a class="bs_logo bs_logo_main" href="<?php bloginfo( 'url' ); ?>">
										<img class="wk-img-responsive" src="<?php echo get_option( 'wk_custom_logo_main' ); ?>">
									</a>
								</section>

								<section id="bs_menu_bar" class="bs_section_mobil wk-d">

									<?php get_template_part( 'includes/main-menu' ); ?>

								</section>

							<?php else : ?>

								<div class="bs_section_mobil wk-d-padding-t-100 wk-m-padding-t-20">
									
									<div class="wk-cols">
										
										<div class="wk-col-2 wk-m-flex-item wk-m-flex-justify-center">
											
											<section id="bs_logo_bar" class="bs_logo_bar_alt">
												<a class="bs_logo bs_logo_complementary" href="<?php bloginfo( 'url' ); ?>">
													<img width="100" src="<?php echo get_option( 'wk_custom_logo_complementary' ); ?>">
												</a>
											</section>
											
										</div>

										<div class="wk-col-6">

											<section id="bs_menu_bar">

												<?php get_template_part( 'includes/social-bar' ); ?>

												<div class="wk-d">
		
													<?php get_template_part( 'includes/main-menu' ); ?>
													
												</div>

											</section>
											
										</div>
										
									</div>
									
								</div>

							<?php endif; ?>

						
					</div>

				</header>

				<?php if( is_home() ) : ?>

					<!-- Slider -->

					<section id="slider" class="wk-section">

						<div class="bs-slider">

							<?php if( have_rows( 'bs_slides', 'option' ) ) : while( have_rows( 'bs_slides', 'option' ) ) : the_row(); ?>

								<?php if( get_row_layout() == 'bs_custom_slider' ) : ?>

									<div class="bs_slide">

										<div class="bs_slide_bg">
											<img class="wk-img-responsive" data-lazy="<?php the_sub_field( 'bs_slide_image' ); ?>">									
										</div>
										<div class="bs_slide_content">
											<div class="bs_slide_content_container">
												<h1 class="bs_title_big"><?php the_sub_field( 'bs_slide_title' ); ?></h1>	
												<p class="bs_title_garamond_mid"><?php the_sub_field( 'bs_slide_excerpt' ); ?></p>							
											</div>
										</div>
										<div class="bs_slide_readmore">
											<a class="bs_button bs_button_light" href="<?php the_permalink(); ?>">
												Continue Reading
											</a>
										</div>

									</div><!--.bs-slide-->

								<?php elseif( get_row_layout() == 'bs_post_slider' ) : ?>

									<?php $post_object = get_sub_field('bs_slide_post', 'option'); ?>

									<?php //print_r($post_object); ?>	

									<div class="bs_slide">

										<div class="bs_slide_bg">
											<img class="wk-img-responsive" data-lazy="<?php $featured_img_id = get_post_thumbnail_id( $post_object->ID ); $featured_img = wp_get_attachment_image_src( $featured_img_id, 'medium' ); echo( $featured_img[0] ); ?>">									
										</div>
										<div class="bs_slide_content">
											<div class="bs_slide_content_container">
												<h1 class="bs_title_big"><?php echo $post_object->post_title; ?></h1>	
												<p class="bs_title_garamond_mid"><?php echo $post_object->post_excerpt; ?></p>							
											</div>
										</div>
										<div class="bs_slide_readmore">
											<a class="bs_button bs_button_light" href="<?php  echo $post_object->guid;; ?>">
												Continue Reading
											</a>
										</div>

									</div><!--.bs-slide-->

								<?php endif; ?>									

							<?php endwhile; endif; ?>

						</div><!--.bs-slider-->

					</section>

				<?php endif; ?>

				<main role="main">

				




				

			








