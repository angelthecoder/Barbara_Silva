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
WPKit Dash B */


		include_once( get_template_directory() . '/wpkit/admin/wpkit-dash-b.php' );


/*******************************************************************************
Admin scripts */

	$GLOBALS['wpkit_url'] = get_template_directory_uri() . '/wpkit/';

	// Admin

		function wpkit_admin_enqueue_scripts() {

			// Style
				wp_register_style( 'wk-style', $GLOBALS['wpkit_url'] . 'css/style.css' ); wp_enqueue_style( 'wk-style' );
				wp_register_style( 'wk-admin-wkui-style', $GLOBALS['wpkit_url'] . 'assets/wpkitui/wpkitui.css' ); wp_enqueue_style( 'wk-admin-wkui-style' );

			// Script
			   wp_enqueue_media();
			   wp_register_script( 'wk-scripts', $GLOBALS['wpkit_url'] . '/js/scripts.js', array('jquery') ); wp_enqueue_script( 'wk-scripts' );
			   wp_register_script( 'wk-admin-wkui-scripts', $GLOBALS['wpkit_url'] . 'assets/wpkitui/wpkitui.js', array('jquery') ); wp_enqueue_script( 'wk-admin-wkui-scripts' );

		 }

		 add_action('admin_enqueue_scripts', 'wpkit_admin_enqueue_scripts');

	// WP

		function wpkit_wp_enqueue_scripts() {

			// Style
				wp_register_style( 'wk-wkui-style', $GLOBALS['wpkit_url'] . 'assets/wpkitui/wpkitui.css' ); wp_enqueue_style( 'wk-wkui-style' );
			
			// Script
				wp_register_script( 'wk-wkui-scripts', $GLOBALS['wpkit_url'] . 'assets/wpkitui/wpkitui.js', array('jquery') ); wp_enqueue_script( 'wk-wkui-scripts' );
		
		}
		
		add_action( 'wp_enqueue_scripts', 'wpkit_wp_enqueue_scripts' );

	// Admin head

	 	function wpkit_admin_head() {
	 		echo '<link rel="Shortcut Icon" type="image/ico" href="' . $GLOBALS['wpkit_url'] . '/img/favicon.png">';
	 	}
	 	add_action( 'admin_head', 'wpkit_admin_head', 20 );

	// WP head

 		function wpkit_wp_head() {
 			
 			get_template_part( 'wpkit/inc/header' );

 		}
 		
 		add_action( 'wp_head', 'wpkit_wp_head', 0 );

 	// WP Footer

		function wpkit_wp_footer() { ?>

			<!--Script-->
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.3.min.js"></script>
			<!--Modernizr-->
			<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><?php

			if( get_option( 'wk_option_library_oknav' ) ) { ?>
				<!--OkNav-->
				<link id="style-okaynav-lib" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/oknav/okayNav.min.css">
				<script id="script-okaynav-lib" src="<?php echo get_template_directory_uri(); ?>/assets/oknav/jquery.okayNav-min.js"></script>
				<script id="script-okaynav" type="text/javascript">
			        var navigation = $('#nav-main').okayNav();
			    </script>
			    <style id="style-okaynav">
				    .okayNav a {color: inherit; font-size: inherit; font-weight: inherit;}
				    .okayNav__menu-toggle {top: 12px; height: 18px; }
			    </style><?php 
			}
		    
		    if( get_option( 'wk_option_library_fancybox' ) ) { ?>
		    	
	    		<!--Fancybox-->
	    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	    		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	    		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	    		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	    		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	    		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	    		<script type="text/javascript">
	    			$(document).ready(function() {
	    				$(".fancybox-thumb").fancybox({
	    					prevEffect	: 'elastic',
	    					nextEffect	: 'elastic',
	    					helpers	: {
	    						title	: {
	    							type: 'outside'
	    						},
	    						thumbs	: {
	    							width	: 50,
	    							height	: 50
	    						}
	    					}
	    				});
	    			});
	    		</script>

	    		<script>
	    			$(document).ready(function() {
	    				$(".various").fancybox({
	    					maxWidth	: 800,
	    					maxHeight	: 600,
	    					fitToView	: false,
	    					width		: '70%',
	    					height		: '70%',
	    					autoSize	: false,
	    					closeClick	: false,
	    					openEffect	: 'none',
	    					closeEffect	: 'none'
	    				});
	    			});
	    			base= '<?php echo get_template_directory_uri(); ?>';
	    		</script>
	    	<!--end Fancybox--><?php 
		    } 

		    if( get_option( 'wk_option_library_flickity' ) ) { ?>
		      <!-- Flickity-->
	    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/flickity/flickity.css" media="screen">
	    		<script src="<?php echo get_template_directory_uri(); ?>/assets/flickity/flickity.pkgd.min.js"></script>
	    		<script>
	    			/*$('.slider').flickity({
	    				
	    			});*/
	    		</script><?php 
		    } ?>

			<!--Photoswipe-->
			<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/photoswipe/photoswipe.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/photoswipe/default-skin/default-skin.css">
			<script src="<?php echo get_template_directory_uri(); ?>/assets/photoswipe/photoswipe.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/photoswipe/photoswipe-ui-default.min.js"></script>--><?php

		}

		add_action( 'wp_footer', 'wpkit_wp_footer' );		

/*********************************************************************************
* ACF */

		// 1. Custom ACF path
		add_filter('acf/settings/path', 'acf_settings_path');

		function acf_settings_path( $path ) {

			// update path
			$path = get_template_directory() . '/wpkit/acf/';

			// return
			return $path;

		}

		// 2. Custom ACF dir
		add_filter('acf/settings/dir', 'acf_settings_dir');

		function acf_settings_dir( $dir ) {

			// update path
			$dir = get_template_directory_uri() . '/wpkit/acf/';

			// return
			return $dir;

		}

		include_once( get_template_directory() . '/wpkit/acf/acf.php' );

		if( get_current_user_id() != 1 ) {

			add_filter('acf/settings/show_admin', '__return_false');

		} 

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

		/***************************************************************************
		* ACF Code field */

			include_once( get_template_directory() . '/wpkit/acf/acf-code-field/acf-code-field.php' );

		/***************************************************************************
		* Campos por default de Advanced Custom Fields */

			include_once( get_template_directory() . '/functions/acf-custom.php');


/*******************************************************************************
* Campos personalizados en el menú de administrador en General Settings */

	// Registra opciones en la tabla por default de wordpress

		add_filter('admin_init', 'wk_register_field_topic');
		function wk_register_field_topic() {
			register_setting('general', 'site_topic', 'esc_attr');
			add_settings_field('site_topic', '<label for="site_topic">'.__('Subject' , 'site_topic' ).'</label>' , 'wk_print_custom_field_topic', 'general');

			register_setting('general', 'site_summary', 'esc_attr');
			add_settings_field('site_summary', '<label for="site_summary">'.__('Summary' , 'site_summary' ).'</label>' , 'wk_print_custom_field_summary', 'general');

			register_setting('general', 'site_category', 'esc_attr');
			add_settings_field('site_category', '<label for="site_category">'.__('Category' , 'site_category' ).'</label>' , 'wk_print_custom_field_category', 'general');

		}

		// Imprime las opciones

			// Tema
			function wk_print_custom_field_topic() {
			    $value_topic = get_option( 'site_topic', '' );
				echo '<input type="text" id="site_topic" class="regular-text code" name="site_topic" value="' . $value_topic . '" />';
				echo '<p class="description">Indica el tema principal del sitio. Se añadirá como meta etiqueta. Algunos buscadores toman en cuenta esta etiqueta.</p>';
			}

			// Summary y abstract
			function wk_print_custom_field_summary() {
				$value_summary = get_option( 'site_summary', '' );
				echo '<input type="text" id="site_summary" class="regular-text code" name="site_summary" value="' . $value_summary . '" />';
				echo '<p class="description">Algunos buscadores toman en cuenta esta etiqueta.';
			}

			// Category y classification
			function wk_print_custom_field_category() {
				$value_category = get_option( 'site_category', '' );
				echo '<input type="text" id="site_category" class="regular-text code" name="site_category" value="' . $value_category . '" />';
				echo '<p class="description">Algunos buscadores toman en cuenta esta etiqueta.';
			}

	// Sección de opciones "Viewport" en ajustes generales

		add_action('admin_init', 'wk_register_section_mobile_optimization');
		function wk_register_section_mobile_optimization() {
		    add_settings_section(
			  'mobile_optimization_options', // ID
			  'Mobile options', // Título
			  'wk_section_mobile_optimization_options_callback', // Callback
			  'general' // La página en la que se mostrará
		    );

		    add_settings_field( // Opción 1
			  'viewport_size', // ID de la sección
			  'Viewport size', // Label
			  'section_viewport_size_textbox_callback', // !important - This is where the args go!
			  'general', // La página en la que se mostrará
			  'mobile_optimization_options', // Nombre de la sección
			  array( 
				'viewport_size' // Deberá ser el ID de la sección
			  )
		    );

		    register_setting('general','viewport_size', 'esc_attr');
		}

		// Imprime los campos
			function wk_section_mobile_optimization_options_callback() { // Section Callback
				echo '<p>Opciones de visualización para exploradores y móviles.</p>';
			}

			function section_viewport_size_textbox_callback($args) {  // Textbox Callback
			    $option = get_option($args[0]);
				echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
				echo '<p class="description">Indica un número integro, p.eg. 516. Default es 320';
			}




/* ***********************************************************************************************************************
* Añade páginas de opciones:
1. General settings / Contenidos
2. General settings / Redes sociales 
*/


		function wk_options_general() {

			//Página options/Ajustes de contenido
			add_options_page('Ajustes de contenidos', 'Contenidos', 'administrator', 'options-contents', 'wk_options_contents_callback');

			//Página options/Ajustes de redes sociales"
			add_options_page('Ajustes de redes sociales', 'Redes sociales', 'administrator', 'social-options', 'wk_options_social_callback');

			//Callback register settings function
			add_action( 'admin_init', 'wk_register_settings_options_general' );
		}

		add_action('admin_menu', 'wk_options_general');

		// Registra grupos de opciones

		function wk_register_settings_options_general() {

			// Atribución
			register_setting( 'content-settings-group-wpkit', 'site_owner' );
			register_setting( 'content-settings-group-wpkit', 'site_copyright' );
			register_setting( 'content-settings-group-wpkit', 'site_replay_to_active' );
			register_setting( 'content-settings-group-wpkit', 'site_replay_to' );
			// Información de contenido
			register_setting( 'content-settings-group-wpkit', 'site_publisher' );
			register_setting( 'content-settings-group-wpkit', 'site_rating' );
			// Registra grupo de opciones "Redes sociales"
			register_setting( 'social-settings-group-wpkit', 'site_facebook_id' );
			register_setting( 'social-settings-group-wpkit', 'site_google_plus_url' );
			register_setting( 'social-settings-group-wpkit', 'site_twitter_account' );

		}

		// Contenido options/ajustes de contenido

		function wk_options_contents_callback() { ?>

				<div class="wrap">
					<h1>Ajustes de contenidos</h1>

					<form method="post" action="options.php">
						<?php settings_fields( 'content-settings-group-wpkit' ); ?>
						<?php do_settings_sections( 'content-settings-group-wpkit' ); ?>
						<p>Se incluirán como meta etiquetas, normalmente no afectan el desempeño del sitio pero pueden ayudar a mejorar el rankin en motores de búsqueda.</p>
						<h3>Atribución</h3>
						<table class="form-table">
							<tr valign="top">
								<th scope="row">Site owner</th>
								<td>
									<input type="text" name="site_owner" value="<?php echo esc_attr( get_option('site_owner') ); ?>" class="regular-text"/>
									<p class="description">Deja en blanco para indicar que el propietario del sitio es <?php bloginfo('name'); ?>.</p>
								</td>
							  </tr>

							<tr valign="top">
								<th scope="row">Copyright</th>
								<td>
									<input type="text" name="site_copyright" value="<?php echo esc_attr( get_option('site_copyright') ); ?>" class="regular-text"/>
									<p class="description">Deja en blanco para indicar que los derechos del sitio pertenecen a <?php bloginfo('name'); ?>.</p>
								</td>
							</tr>

							  <tr valign="top">
								<th scope="row">Replay to</th>
								<td>
									<fieldset>
										<legend class="screen-reader-text"><span>Replay to</span></legend>
										  <label for="site_replay_to_active">
											<input type="checkbox" id="site_replay_to_active" name="site_replay_to_active" value='1' <?php checked( '1', get_option( 'site_replay_to_active' ) ); ?> />
											Mostrar
											<p class="description">Los buscadores generarán snippets enriquecidos con esta información.</p>
										  </label>
									  </fieldset>
								</td>
							  </tr>

							<tr valign="top">
								<th scope="row">Replya to email</th>
								<td>
									<input type="text" name="site_replay_to" value="<?php echo esc_attr( get_option('site_replay_to') ); ?>" class="regular-text"/>
									<p class="description">Indica el email que se mostrará en esta meta etiqueta. Si dejas en blanco se mostrará <?php bloginfo('admin_email'); ?>.</p>
								</td>
							</tr>

							<!--<tr valign="top">
								<th scope="row">"Radio buttonms example</th>
								<td>
									<input name="some_option" type="radio" value="0" <?php checked( '0', get_option( 'some_option' ) ); ?> />
									<input name="some_option" type="radio" value="1" <?php checked( '1', get_option( 'some_option' ) ); ?> />
								</td>
							</tr>-->
					    </table>

						<h3>Información del contenido</h3>

						<p>Proporciona datos adicionales sobre los contenidos del sitio</p>

						<table class="form-table">
							<tr valign="top">
								<th scope="row">Editor del sitio</th>
								<td>
									<input type="text" name="site_publisher" placeholder="nada" value="<?php echo esc_attr( get_option('site_publisher') ); ?>" class="regular-text"/>
								</td>
							</tr>
							<tr valign="top">
								<th scope="row">Rating</th>
								<td>
									<input type="text" name="site_rating" value="<?php echo esc_attr( get_option('site_rating') ); ?>" class="regular-text"/>
								</td>
							</tr>
						</table>						

					    <?php submit_button(); ?>

					</form>
				</div>
			<?php
		}

		// Contenido options/social

		function wk_options_social_callback() {

			?>
				<div class="wrap">

					<h1>Redes sociales</h1>

					<form method="post" action="options.php">
						<?php settings_fields( 'social-settings-group-wpkit' ); ?>
						<?php do_settings_sections( 'social-settings-group-wpkit' ); ?>
						<h3>Perfiles</h3>
						<p>Los perfiles de redes sociales se usarán para generar meta etiquetas de Open graph y Twitter Cards.</p>
						<table class="form-table">
							<tr valign="top">
								<th scope="row">Facebook id</th>
								<td>
									<input type="text" name="site_facebook_id" value="<?php echo esc_attr( get_option('site_facebook_id') ); ?>" class="regular-text"/>
									<p class="description">En tu página de facebook ve a "configuración" / "información de página" y encuentra en la parte inferior "Identificador de página de Facebook"</p>
								</td>
							</tr>

							<tr valign="top">
								<th scope="row">Google+</th>
								<td>
									<input type="text" name="site_google_plus_url" value="<?php echo esc_attr( get_option('site_google_plus_url') ); ?>" class="regular-text"/>
									<p class="description">URL del perfil de Google +, p.eg. http://www.plus.google.com/me</p>
								</td>
							</tr>

							<tr valign="top">
								<th scope="row">Twitter</th>
								<td>
									<input type="text" name="site_twitter_account" value="<?php echo esc_attr( get_option('site_twitter_account') ); ?>" class="regular-text"/>
									<p class="description">Cuenta de twitter, p.eg @wpkit</p>
								</td>
							</tr>
						</table>

					    <?php submit_button(); ?>

					</form>

				</div>

			<?php
		}



/************************************************************************************************************************
* Campos extra de usuario */

		// Redes sociales

			function wk_modify_contact_methods($profile_fields) {

				// Añade nuevos campos en las opciones de Perfil
				$profile_fields['twitter'] = 'Twitter Username';
				$profile_fields['facebook'] = 'Facebook Username';
				$profile_fields['gplus'] = 'Google+ Username';
				$profile_fields['instagram'] = 'Instagram Username';
				$profile_fields['pinterest'] = 'Pinterest Account';

				// Quita campos existentes
				//unset($profile_fields['aim']);

				return $profile_fields;
			}

			add_filter('user_contactmethods', 'wk_modify_contact_methods');

			/* Callback
			$twitter = get_the_author_meta('twitter');
			*/

/* ***********************************************************************************************************************
*  Snippets */

		/* ***********************************************************************************************************************
		*  Incluye OS y Explorador en boddy_class */

				function wk_bodyclass_browser($classes) {

					global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

					if($is_lynx) $classes[] 	 	= 'lynx';
					elseif( $is_gecko ) $classes[] 	= 'firefox';
					elseif( $is_opera ) $classes[] 	= 'opera'; // Detecta como chrome
					elseif( $is_NS4 ) $classes[] 	= 'ns4';
					elseif( $is_safari ) $classes[] = 'safari';
					elseif( $is_chrome ) $classes[] = 'chrome';
					elseif( $is_edge ) $classes[] 	= 'edge';
					elseif( $is_IE ) {
						$classes[] = 'iexplorer';
						if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
						$classes[] = 'iexplorer'.$browser_version[1];

					} else $classes[] = 'unknown';

					if($is_iphone) $classes[] = 'iphone';

					if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
						 $classes[] = 'osx';
					 } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
						 $classes[] = 'linux';
					 } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
						 $classes[] = 'windows';
					 }
					return $classes;
				  }
				  add_filter('body_class','wk_bodyclass_browser');

		/* ***********************************************************************************************************************
		*  Slug de página en boddy_class */

				function wk_bodyclass_slug( $classes ) {
					global $post;
					if ( isset( $post ) ) {
						$classes[] = $post->post_type . '-' . $post->post_name;

					}
					return $classes;
				}
				add_filter( 'body_class', 'wk_bodyclass_slug' );

		/* ***********************************************************************************************************************
		*  Oculta notificaciones de WP

				function remove_core_updates_wpkit(){
					global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
				}
				add_filter('pre_site_transient_update_core','remove_core_updates_wpkit');
				add_filter('pre_site_transient_update_plugins','remove_core_updates_wpkit');
				add_filter('pre_site_transient_update_themes','remove_core_updates_wpkit');

		/* ***********************************************************************************************************************
		*  Redirecciona al home después de loggear

				function redirect_after_login_wpkit() {
						global $redirect_to;
						if (!isset($_GET['redirect_to'])) {
								$redirect_to = get_option('siteurl');
						}
				}
				add_action('login_form', 'redirect_after_login_wpkit');

		/* ***********************************************************************************************************************
		*  Oculta items de menu en admin menu

				function remove_menu_items_wpkit() {
					remove_menu_page('tools.php');
					remove_menu_page('index.php');
				}
				add_action('admin_menu', 'remove_menu_items_wpkit');

		/* ***********************************************************************************************************************
		* Redirecciona después de publicar un comentario

				function redirect_after_comment_wpkit($location)	{
					global $wpdb;
					return $_SERVER["HTTP_REFERER"]."#comment-".$wpdb->insert_id;
				}
				add_filter('comment_post_redirect', 'redirect_after_comment_wpkit');

		/* ***********************************************************************************************************************
		*  Incrementa el tamaño permitido en subida de archivos

				@ini_set( 'upload_max_size' , '50MB' );

				ò agrego esto al htacces

				php_value upload_max_filesize 64M
				php_value post_max_size 64M
				php_value max_execution_time 300
				php_value max_input_time 300

		/* ***********************************************************************************************************************
		* Cambia la categoría por defaul de 'Sin categoría' o 'Uncatecorized' a 'Sin categorizar'

				update_option( 'default_category', 'Sin categorizar' );

		/************************************************************************************************************************
		* Reemplaza labels en admin menu *

		    function wpkit_change_admin_menu_posts_label() {
			  global $menu;
			  global $submenu;
			  $menu[5][0] = 'Artículos';
			  $submenu['edit.php'][5][0] = 'Artículos';
			  //$submenu['edit.php'][10][0] = 'Añadir';
			  //$submenu['edit.php'][15][0] = 'Status'; // Change name for categories
			  //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
			  echo '';
		    }

		    function wpkit_change_admin_menu_labels() {
				global $wp_post_types;
				$labels = &$wp_post_types['post']->labels;
				$labels->name = 'Artículos';
				$labels->singular_name = 'Artículo';
				$labels->add_new = 'Añadir artículo';
				$labels->add_new_item = 'Nuevo artículo';
				$labels->edit_item = 'Editar artículo';
				$labels->new_item = 'Artículo';
				$labels->view_item = 'Ver artículo';
				//$labels->search_items = '';
				//$labels->not_found = '';
				//$labels->not_found_in_trash = '';
			  }
			  add_action( 'init', 'wpkit_change_admin_menu_labels' );
			  add_action( 'admin_menu', 'wpkit_change_admin_menu_posts_label' );


		/************************************************************************************************************************
		* Muestra solo los posts de usuario al autor del post, excepto admin *

	  		function wk_parse_query_useronly( $wp_query ) {
	  		    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false ) {
	  		        if ( !current_user_can( 'level_10' ) ) {
	  		            global $current_user;
	  		            $wp_query->set( 'author', $current_user->id );
	  		        }
	  		    }
	  		}

	  		add_filter('parse_query', 'wk_parse_query_useronly' );

	  		/************************************************************************************************************************
			* Muestra solo imagenes que ha subido el usuario desde el dialogo insetar en las publicaciones, en media library podrá segui
			viendo todas las imágenes. *

	  		function wk_query_set_only_author( $wp_query ) {
	  		    global $current_user;
	  		    if( is_admin() && !current_user_can('edit_others_posts') ) {
	  		        $wp_query->set( 'author', $current_user->ID );
	  		        add_filter('views_edit-post', 'fix_post_counts');
	  		        add_filter('views_upload', 'fix_media_counts');
	  		    }
	  		}

	  		add_action('pre_get_posts', 'wk_query_set_only_author' );
	
		
  		/************************************************************************************************************************
		Requiere "Featured image" para poder publicar *	  		

	  		add_action('save_post', 'wpds_check_thumbnail');
	  		add_action('admin_notices', 'wpds_thumbnail_error');
	  		function wpds_check_thumbnail($post_id) {
	  		    // change to any custom post type
	  		    if(get_post_type($post_id) != 'portafolios')
	  		        return;
	  		    if ( !has_post_thumbnail( $post_id ) ) {
	  		        // set a transient to show the users an admin message
	  		        set_transient( "has_post_thumbnail", "no" );
	  		        // unhook this function so it doesn't loop infinitely
	  		        remove_action('save_post', 'wpds_check_thumbnail');
	  		        // update the post set it to draft
	  		        wp_update_post(array('ID' => $post_id, 'post_status' => 'draft'));
	  		        add_action('save_post', 'wpds_check_thumbnail');
	  		    } else {
	  		        delete_transient( "has_post_thumbnail" );
	  		    }
	  		}
	  		function wpds_thumbnail_error()
	  		{
	  		    // check if the transient is set, and display the error message
	  		    if ( get_transient( "has_post_thumbnail" ) == "no" ) {
	  		        echo "<div id='message' class='error'><p><strong>Debes seleccionar una imagen para poder publicar. Se ha guardado el borrador.</strong></p></div>";
	  		        delete_transient( "has_post_thumbnail" );
	  		    }
	  		}


  		/************************************************************************************************************************
		Permite subir solo jpeg gif y png *

	  		function restrict_mime($mimes) {
		  		$mimes = array(
		  		                'jpg|jpeg|jpe' => 'image/jpeg',
		  		                'gif' => 'image/gif',
		  		                'png' => 'image/png',
		  		);
		  		return $mimes;
	  		}
	  			
	  			add_filter('upload_mimes','restrict_mime');
		
		/***********************************************************************************************************************
		Remove Meta boxes - esconde metaboxes */

			// https://codex.wordpress.org/Function_Reference/remove_meta_box
			
			function wk_remove_meta_boxes() {

				$post_type = array('post', 'page');

				// remove_meta_box('authordiv', $post_type, 'normal');
				// remove_meta_box('categorydiv', $post_type, 'normal');
				// remove_meta_box('commentstatusdiv', $post_type, 'normal');
				// remove_meta_box('commentsdiv', $post_type, 'normal');
				// remove_meta_box('formatdiv', $post_type, 'normal');
				// remove_meta_box('pageparentdiv', $post_type, 'normal');
				remove_meta_box('postcustom', $post_type, 'normal');	
				// remove_meta_box('postexcerpt', $post_type, 'normal');
				// remove_meta_box('postimagediv', $post_type, 'normal');
				// remove_meta_box('revisionsdiv', $post_type, 'normal');
				// remove_meta_box('slugdiv', $post_type, 'normal');
				// remove_meta_box('submitdiv', $post_type, 'normal');
				// remove_meta_box('tagsdiv-post_tag', $post_type, 'normal');
				// remove_meta_box('trackbacksdiv', $post_type, 'normal');

				// Dashboard

				// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );   // Right Now
				// remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' ); // Recent Comments
				// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );  // Incoming Links
				// remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );   // Plugins
				// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );  // Quick Press
				// remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );  // Recent Drafts
				// remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );   // WordPress blog
				// remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );   // Other WordPress News
				// use 'dashboard-network' para remover widgets del dashboard de red

			}

			add_action( 'admin_menu', 'wk_remove_meta_boxes' );
			add_action( 'wp_dashboard_setup', 'wk_remove_meta_boxes' );

		/************************************************************************************************************************
		* Añada widgets en el dashboard */

			// https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget

			// Imprime el contenido del widget
			function wk_dashboard_widget( $post, $callback_args ) { ?>

				    <html>
				      <head>
				        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				        <script type="text/javascript">
				          google.charts.load('upcoming', {'packages':['geochart']});
				          google.charts.setOnLoadCallback(drawRegionsMap);

				          function drawRegionsMap() {

				            var data = google.visualization.arrayToDataTable([
				              ['Country', 'Popularity'],
				              ['Germany', 100],
				              ['United States', 150],
				              ['Brazil', 100],
				              ['Canada', 10],
				              ['France', 60],
				              ['Mexico', 1700]
				            ]);

				            var options = {};

				            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

				            chart.draw(data, options);
				          }
				        </script>
				      </head>
				      <body>
				        <div id="regions_div" style="width: 350px; height: 350px; display: block; margin: auto;"></div>
				      </body>
				    </html>
			<?php }

			// Action hook
			function wk_add_dashboard_widgets() {
				wp_add_dashboard_widget('dashboard_widget', 'Dashboard Widget', 'wk_dashboard_widget');
			}

			// Registra el widget
			add_action('wp_dashboard_setup', 'wk_add_dashboard_widgets' );


		/************************************************************************************************************************
		Permite subir .svg */

			function wk_mime_types( $mimes ){
			    $mimes['svg'] = 'image/svg+xml';
			    return $mimes;
			}

				add_filter( 'upload_mimes', 'wk_mime_types' );

		/************************************************************************************************************************
		WP pointer *

			function wk_admin_pointer() {
			    wp_enqueue_style( 'wp-pointer' );
			    wp_enqueue_script( 'wp-pointer' );
			    add_action( 'admin_print_footer_scripts', 'wk_admin_pointer_print_scripts' );
			}
			function wk_admin_pointer_print_scripts() {
			    $pointer_content = '<h3>WPKit | Notice</h3>';
			    $pointer_content .= '<p>Ajusta las opciones de este sitio en el menú de administración</p>';
			?>
			   <script type="text/javascript">
			   //<![CDATA[
			   jQuery(document).ready( function($) {
			    $('#toplevel_page_options-wpkit').pointer({
			        content: '<?php echo $pointer_content; ?>',
			        position: 'left',
			        close: function() {
			            // Once the close button is hit
			        }
			      }).pointer('open');
			   });
			   //]]>
			   </script>
			<?php
			}

				add_action( 'admin_enqueue_scripts', 'wk_admin_pointer' );

  		/************************************************************************************************************************
		
	  		///////////////////////////////////////////////////////
	  		// TinyMCE //////////////////////////////////////////
	  		///////////////////////////////////////////////////////

	  		function wk_format_TinyMCE($in)
	  		{
	  		 $in['remove_linebreaks']=false;
	  		 $in['gecko_spellcheck']=false;
	  		 $in['keep_styles']=true;
	  		 $in['accessibility_focus']=true;
	  		 $in['tabfocus_elements']='major-publishing-actions';
	  		 $in['media_strict']=true;
	  		 $in['paste_remove_styles']=false;
	  		 $in['paste_remove_spans']=false;
	  		 $in['paste_strip_class_attributes']='none';
	  		 $in['paste_text_use_dialog']=true;
	  		 $in['wpeditimage_disable_captions']=true;
	  		 $in['plugins']='inlinepopups,tabfocus,paste,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen';
	  		 $in['content_css']=get_template_directory_uri() . "/editor-style.css";
	  		 $in['wpautop']=true;
	  		 $in['apply_source_formatting']=false;
	  		 $in['theme_advanced_buttons1']='forecolor,|,bold,italic,underline,|,bullist,numlist,|,wp_fullscreen,wp_adv';
	  		 $in['theme_advanced_buttons2']='pastetext,pasteword,removeformat,|,charmap,|,outdent,indent,|,undo,redo';
	  		 $in['theme_advanced_buttons3']='';
	  		 $in['theme_advanced_buttons4']='';
	  		 return $in;
	  		}
	  		add_filter('tiny_mce_before_init', 'wk_format_TinyMCE' );

			/************************************************************************************************************************
			Creates post duplicate as a draft and redirects then to the edit post screen
			https://rudrastyh.com/wordpress/duplicate-post.html */

		  		function rd_duplicate_post_as_draft(){
		  			global $wpdb;
		  			if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		  				wp_die('No post to duplicate has been supplied!');
		  			}
		  		 
		  			/*
		  			 * get the original post id
		  			 */
		  			$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
		  			/*
		  			 * and all the original post data then
		  			 */
		  			$post = get_post( $post_id );
		  		 
		  			/*
		  			 * if you don't want current user to be the new post author,
		  			 * then change next couple of lines to this: $new_post_author = $post->post_author;
		  			 */
		  			$current_user = wp_get_current_user();
		  			$new_post_author = $current_user->ID;
		  		 
		  			/*
		  			 * if post data exists, create the post duplicate
		  			 */
		  			if (isset( $post ) && $post != null) {
		  		 
		  				/*
		  				 * new post data array
		  				 */
		  				$args = array(
		  					'comment_status' => $post->comment_status,
		  					'ping_status'    => $post->ping_status,
		  					'post_author'    => $new_post_author,
		  					'post_content'   => $post->post_content,
		  					'post_excerpt'   => $post->post_excerpt,
		  					'post_name'      => $post->post_name,
		  					'post_parent'    => $post->post_parent,
		  					'post_password'  => $post->post_password,
		  					'post_status'    => 'draft',
		  					'post_title'     => $post->post_title,
		  					'post_type'      => $post->post_type,
		  					'to_ping'        => $post->to_ping,
		  					'menu_order'     => $post->menu_order
		  				);
		  		 
		  				/*
		  				 * insert the post by wp_insert_post() function
		  				 */
		  				$new_post_id = wp_insert_post( $args );
		  		 
		  				/*
		  				 * get all current post terms ad set them to the new post draft
		  				 */
		  				$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		  				foreach ($taxonomies as $taxonomy) {
		  					$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
		  					wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		  				}
		  		 
		  				/*
		  				 * duplicate all post meta just in two SQL queries
		  				 */
		  				$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		  				if (count($post_meta_infos)!=0) {
		  					$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
		  					foreach ($post_meta_infos as $meta_info) {
		  						$meta_key = $meta_info->meta_key;
		  						$meta_value = addslashes($meta_info->meta_value);
		  						$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
		  					}
		  					$sql_query.= implode(" UNION ALL ", $sql_query_sel);
		  					$wpdb->query($sql_query);
		  				}
		  		 
		  		 
		  				/*
		  				 * finally, redirect to the edit post screen for the new draft
		  				 */
		  				wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		  				exit;
		  			} else {
		  				wp_die('Post creation failed, could not find original post: ' . $post_id);
		  			}
		  		}
		  		add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
		  		 
		  		/*
		  		 * Add the duplicate link to action list for post_row_actions
		  		 */
		  		function rd_duplicate_post_link( $actions, $post ) {
		  			if (current_user_can('edit_posts')) {
		  				$actions['duplicate'] = '<a href="admin.php?action=rd_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Duplicar esta publicación" rel="permalink">Duplicar</a>';
		  			}
		  			return $actions;
		  		}
		  		 
		  		add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );

/***********************************************************************************************************************
Widgets en Dashboard */

	 function wpkit_dashboard_widget_callback($post, $metabox) {

	 	//Get global variables
	 	global $wp_registered_sidebars, $wp_registered_widgets;

	 	//Get sidebars
	 	$sidebars = wp_get_sidebars_widgets();

	 	//Get widgets
	 	$dws_widgets = $sidebars["widgetized-dashboard"];

	 	//Get current widget
	 	$id = $metabox["args"]["id"];

	 	//Get the sidebar
	 	$sidebar = $wp_registered_sidebars["widgetized-dashboard"];

	 	//Gets widgets unique number
	 	$widgetnumber = $wp_registered_widgets[$id]["params"][0]["number"];

	 	//Check if the required data is set
	 	if( isset($wp_registered_widgets[$id]) && isset($wp_registered_widgets[$id]["callback"]) && isset($wp_registered_widgets[$id]["callback"][0]) && $wp_registered_widgets[$id]["params"][0]["number"] == $widgetnumber)
	 	{
	 		/* Code borrowed from widget.php in the WordPress core */
	 		$params = array_merge(
	 		                array( array_merge( $sidebar, array('widget_id' => $id, 'widget_name' => $wp_registered_widgets[$id]['name']) ) ),
	 		                (array) $wp_registered_widgets[$id]['params']
	 		        );

	         // Substitute HTML id and class attributes into before_widget
	         $classname_ = '';
	         foreach ( (array) $wp_registered_widgets[$id]['classname'] as $cn ) {
	                 if ( is_string($cn) )
	                         $classname_ .= '_' . $cn;
	                 elseif ( is_object($cn) )
	                         $classname_ .= '_' . get_class($cn);
	         }
	         $classname_ = ltrim($classname_, '_');
	         $params[0]['before_widget'] = sprintf($params[0]['before_widget'], $id, $classname_);

	         $params = apply_filters( 'dynamic_sidebar_params', $params );

	         $callback = $wp_registered_widgets[$id]['callback'];

	         do_action( 'dynamic_sidebar', $wp_registered_widgets[$id] );

	 		if ( is_callable($callback) ) {
	 			//Call the function, that outputs the widget content
	 			call_user_func_array($callback, $params);
	         }

	 		/* ---------------------------------------------------- */
	 	}

	 }

	 // Action hook
	 function wk_dashboard_widgets() {

	 	global $wp_registered_sidebars, $wp_registered_widgets;

	 	//Current settings
	 	$widgetSettings = get_option('wpkit_widget_settings', array());

	 	//Sidebars
	 	$sidebars = wp_get_sidebars_widgets();

	 	//Widgets de sidebar
	 	$dws_widgets = $sidebars["widgetized-dashboard"];

	 	//Añade cada widget al dashboard
	 	if(is_array($dws_widgets) && count($dws_widgets) > 0) {
	 		foreach($dws_widgets as $id)
	 		{
	 			if(!isset($wp_registered_widgets[$id]))
	 				continue;
	 			//Widget unique number
	 			$widgetnumber = $wp_registered_widgets[$id]["params"][0]["number"];

	 			//Si data que se requiere está
	 			if( isset($wp_registered_widgets[$id]) && isset($wp_registered_widgets[$id]["callback"]) && isset($wp_registered_widgets[$id]["callback"][0]) && $wp_registered_widgets[$id]["params"][0]["number"] == $widgetnumber)
	 			{
	 				//Get widgets settings
	 				$widget = $wp_registered_widgets[$id]["callback"][0]->get_settings();

	 				//Set title
	 				if(trim($widget[$widgetnumber]["title"]) == "") {
	 					$title = '&nbsp;';
	 				} else {
	 					$title = $widget[$widgetnumber]["title"];
	 				}

	 				//Settings - default
	 				if(!isset($widgetSettings[$id])) {
	 					$widgetSettings[$id] = array(
	 						'priority' => 'default',
	 						'context' => 'normal'
	 					);
	 				}

	 				//Añade el widget al dashboard
	 				add_meta_box(
	 					'dashboard_widget_' . $id, 					    //ID
	 					$title, 										//Title
	 					'wpkit_dashboard_widget_callback', 				//Callback function
	 					'dashboard', 									//Where?
	 					$widgetSettings[$id]['context'], 				//Context
	 					$widgetSettings[$id]['priority'], 				//Priority
	 					array('id' => $id,)								//Meta data
	 				);
	 			}
	 		}
	 	}
	 }

	 // Registra el nuevo widget en dashboard con 'wp_dashboard_setup' action
	 add_action('wp_dashboard_setup', 'wk_dashboard_widgets' );

	 //Registra widget area de dashboard
	 register_sidebar(array(
	 	'name' => __( 'Dashboard' ),
	 	'id' => 'widgetized-dashboard',
	 	'class' => '',
	 	'description' => __( 'Estos widgets se mostrarán en el dashboard' ),
	 	'before_title' => '<div style="display: none;">',
	 	'after_title' => '</div>',
	 	'before_widget' => '',
	 	'after_widget' => ''
	 ));


	// Inhabilita los widgets por default de wp

	function wk_disable_default_dashboard_widgets() {

	 	//remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_activity', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	 	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	 	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_primary', 'dashboard', 'core');
	 	//remove_meta_box('dashboard_secondary', 'dashboard', 'core');
	 }

	 add_action('admin_menu', 'wk_disable_default_dashboard_widgets');

/***********************************************************************************************************************
Dev menu */

		include( get_template_directory() . '/wpkit/inc/dev-menu.php' );


/***********************************************************************************************************************
Widgets */


		include( get_template_directory() . '/wpkit/systems/widgets/widgets.php' );


/***********************************************************************************************************************
Options */
	
		include( get_template_directory() . '/wpkit/systems/options.php' );


/***********************************************************************************************************************
Options functions */

	function wk_opengraph_header() {
		if( get_option( 'option_open_graph' ) ) { 

			echo 'prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"';

		}
	}

	function wk_schema_global_type() {

		 if( get_option( 'option_schema_org' ) ) {

		 		if( is_home() || is_page() ) {

		 			if( get_option( 'option_schema_type_manual' ) ) { 

		 				$schema_type = get_option( 'option_schema_type_manual' ); 

		 			} else { 

		 				$schema_type = get_option( 'option_schema_type' ); 
		 			} 

	 			} elseif( is_author() ) {

	 				$schema_type = 'Person';

	 			} else { 

	 				$schema_type = 'Article';

	 			}
		 		
	 		echo 'itemscope itemtype="http://schema.org/' . $schema_type . '"';
	 	}

	}

/************************************************************************************************************************
* WP defaults */

	/************************************************************************************************************************
	* Habilita menú en header y footer */

		function wk_register_menus() {
			register_nav_menus(
				array(
					'main-menu' => __( 'Main menu' ),
					'footer-menu' => __( 'Footer menu' ),
				)
			);
		}

		add_action( 'init', 'wk_register_menus' );

	/************************************************************************************************************************
	* Habilita las imágenes destacadas */

		if ( function_exists( 'add_theme_support' ) ) {
			update_option('thumbnail_size_w', 414);
			update_option('thumbnail_size_h', 414);
			update_option('medium_size_w', 736);
			update_option('medium_size_h', 736);
			add_image_size( 'icon', 32, 32 );
			add_image_size( 'icon-large', 150, 150 );

			add_theme_support( 'post-thumbnails' );
			//add_theme_support( 'post-thumbnails', array( 'post' ) ); // Solo posts
		}


		

/************************************************************************************************************************
Testing */

		function wk_notification() {
			?>

			<div class="notice notice-success is-dismissible">
		        <p>Esta es una notificación</p>
		    </div>

		    <?php 
		}

		add_action( 'admin_notices', 'wk_notification' );

/************************************************************************************************************************
Buscar en el codex en admin menu */

		function wp_codex_search_form() { ?>
		    <form id="search-codex" class="wk-padding-h-22 wk-flex-item wk-flex-align-center wk-flex-justify-between" target="_blank" method="get" action="http://wordpress.org/search/do-search.php" class="alignright" style="margin: 11px 5px 0;">
		        <input style="width: 77%;height: 29px;" type="text" onblur="this.value=(this.value==\'\') ? \'Search the Codex\' : this.value;" onfocus="this.value=(this.value==\'Search the Codex\') ? \'\' : this.value;" maxlength="150" placeholder="Buscar en el codex" ="Search the Codex" name="search" class="text"> 
		        <input type="submit" value="Go" class="button" />
		    </form>
		<?php }
		
		if(is_admin()) {
			add_filter( 'adminmenu', 'wp_codex_search_form', 11 );
		}

/************************************************************************************************************************
Cuenta caracteres en el excerpt */

		function wk_excerpt_count_js(){
		      echo '<script>jQuery(document).ready(function(){
		jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:0px;right:5px;color:#666;\"><small>Excerpt length: </small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"excerpt_counter\" readonly=\"\" style=\"background:#fff;\"> <small>character(s).</small></div>");
		     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
		     jQuery("#excerpt").keyup( function() {
		     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
		   });
		});</script>';
		}
		add_action( 'admin_head-post.php', 'wk_excerpt_count_js');
		add_action( 'admin_head-post-new.php', 'wk_excerpt_count_js');




