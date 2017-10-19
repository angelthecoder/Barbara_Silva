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
	<script src="<?php echo get_template_directory_uri(); ?>/assets/photoswipe/photoswipe-ui-default.min.js"></script>-->


	<!--Page scripts-->
	<?php 

		/* 
		* Toma el campo guardado en metabox scriptdiv y opción Header
		*/

		if( wk_scriptdiv_get_meta( 'wk_scriptdiv_locate' ) == 'Footer' ) { 

			$script = wk_scriptdiv_get_meta( 'wk_scriptdiv_scripts' ); ?>

			<script id="<?php global $post; echo $post->post_name; ?>-foot-scripts">
				<?php echo $script; ?>
			</script>

			<?php 
		} 

	?>
	