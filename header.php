	<!DOCTYPE html>

	<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>" <?php wk_schema_global_type(); ?> class="">

		<head <?php wk_opengraph_header(); ?>>

			<?php wp_head(); ?>

			<?php // Eso es todo Puedes añadir tags a la cabecera desde aquí ?>

			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css">
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
			<link rel="stylesheet" type="text/css" href="http://localhost/wpkitui/css/wpkitui.css">
			<link href="https://fonts.googleapis.com/css?family=Fanwood+Text|Montserrat:100,300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
				
		</head>

		<body <?php body_class('wk-wrap-1440'); ?>>

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

				<section class="wk-section">
					
					<div class="wk-section-wrap">
						
						<header id="main-header">

							
							<?php get_template_part( 'includes/social-bar' ); ?>
							
							<?php if( is_home() ) : ?>
							
								<section id="bs_logo_bar">
									<a href="<?php bloginfo( 'url' ); ?>">
										<img src="<?php echo get_option( 'custom_logo' ); ?>">
									</a>
								</section>

							<?php else : ?>

								<section id="bs_logo_bar" class="bs_logo_bar_alt">
									<a href="<?php bloginfo( 'url' ); ?>">
										<img src="<?php echo get_option( 'custom_logo' ); ?>">
									</a>
								</section>

							<?php endif; ?>


							<section id="bs_menu_bar">
								<?php 

									$nav_args = array(
								 		'theme_location'  => 'main-menu',
								 		'menu'            => '',
								 		'container'       => 'nav',
								 		'container_class' => 'bs_title_menu',
								 		'container_id'    => 'nav-main',
								 		'menu_class'      => 'menu',
								 		'menu_id'         => '',
								 		'echo'            => true,
								 		'fallback_cb'     => 'wp_page_menu',
								 		'before'          => '',
								 		'after'           => '',
								 		'link_before'     => '',
								 		'link_after'      => '',
								 		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								 		'depth'           => 0, // Cuantos niveles de jerarquía se incluirán 0 es todos. -1 imprime todos los niveles en uno mismo.
								 		'walker'          => ''
									);

									wp_nav_menu( $nav_args );

								      /* Para pasar el menu sin los argumentos
								      wp_nav_menu( 'theme_location=header-menu' );
								      */

								?>
							</section>

						</header>
						
					</div>

				</section>

				<!-- Slider -->

				<section class="wk-section">
					<div class="wk-section-wrap">

						<div class="bs-slider">

							<div class="bs_slide">

								<div class="bs_slide_bg">
									<img class="wk-img-responsive" data-lazy="<?php echo get_template_directory_uri(); ?>/img/generic-thumb-inv.jpg">									
								</div>
								<div class="bs_slide_content">
									<div class="bs_slide_content_container">
										<h1 class="bs_title_big">Back in black</h1>	
										<p class="bs_title_garamond_mid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque dolor, eleifend suscipit placerat id, fermentum ut risus. Sed sodales interdum augue sit amet convallis.</p>							
									</div>
								</div>
								<div class="bs_slide_readmore">
									<a class="bs_button bs_button_light" href="#">
										Continue Reading
									</a>
								</div>

							</div>



							<div class="bs_slide">

								<div class="bs_slide_bg">
									<img class="wk-img-responsive" data-lazy="<?php echo get_template_directory_uri(); ?>/img/generic-thumb-inv.jpg">									
								</div>
								<div class="bs_slide_content">
									<div class="bs_slide_content_container">
										<h1 class="bs_title_big">Back in black</h1>	
										<p class="bs_title_garamond_mid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque dolor, eleifend suscipit placerat id, fermentum ut risus. Sed sodales interdum augue sit amet convallis.</p>							
									</div>
								</div>
								<div class="bs_slide_readmore">
									<a class="bs_button bs_button_light" href="#">
										Continue Reading
									</a>
								</div>

							</div>
	
						</div>

					</div>

				</section>

				<main role="main">




				

			








