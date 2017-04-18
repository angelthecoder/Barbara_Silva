	<!--info-->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=UTF-8">
		<meta http-equiv="language" content="<?php bloginfo( 'language' ); ?>">

	<!--site info-->
		<?php 
			if( is_single() || is_page() ) : 
				$title = get_the_title() . ' | ' . get_bloginfo( 'name' ); 
			elseif( is_author() ) : 
				$title = get_the_author() . ' @ ' . get_bloginfo( 'name' );
			elseif( is_archive() ) : 
				$title = 'Archivo' . single_cat_title("", false) . ' | ' . get_bloginfo( 'name' );  
			else : 
				$title = get_bloginfo( 'name' ); 
			endif; 
		?>
		<title><?php echo $title; ?></title>
		<meta name="subtitle" content="Subtitulo de la página">
		<meta name="description" content="<?php if ( is_front_page() ) : bloginfo('description'); else : echo get_the_excerpt(); endif; ?>">
		<?php if( is_single() ) : ?><meta name="keywords" content="<?php echo strip_tags(get_the_tag_list('',', ','')); ?>"><?php endif; ?>
		<?php if( get_option('site_topic') ) : ?><meta name="subject" content="<?php echo get_option('site_topic'); ?>"><?php endif; ?>
		<?php if( get_option('site_summary') ) : ?><meta name="summary" content="<?php echo get_option('site_summary'); ?>"><?php endif; ?>
		<?php if( get_option('site_category') ) : ?><meta name="category" content="<?php echo get_option('site_category'); ?>"><?php endif; ?>
		<!--atribution info-->
			<?php if( get_option('site_owner') ) : ?><meta name="owner" content="<?php echo get_option('site_owner'); ?>"><?php endif; ?>
			<meta name="copyright" content="Copyright <?php if( get_option('site_copyright') ) : echo get_option('site_copyright'); else : bloginfo('name'); endif; ?> - All rights Reserved.">
			<?php if( get_option('site_replay_to_active') ) : ?><meta name="reply-to" content="<?php bloginfo('admin_email'); ?>"><?php endif; ?>

	<!--content info-->
		<meta name="author" content="<?php if( is_front_page() || is_archive() ) : ?><?php bloginfo('name'); ?><?php else : ?><?php $current_user = wp_get_current_user(); echo get_author_posts_url( $current_user->ID ); ?><?php endif; ?>">
		<meta name="author" content="<?php if( is_front_page() || is_archive() ) : ?><?php bloginfo('name'); ?><?php else : ?><?php the_author_meta('display_name', 1); ?><?php endif; ?>">
		<?php if( get_option('site_publisher') ) : ?><meta name="publisher" content="<?php echo get_option('site_publisher'); ?>"><?php endif; ?>
		<?php if( get_option('site_rating') ) : ?><meta name="rating" content="<?php echo get_option('site_rating'); ?>"><?php endif; ?>
		<?php if( get_option('post_original_source') && is_single() ) : ?><meta name="original-source" content="<?php echo original_source_meta_box_wpkit( 'original_source_url' ) ?>"><?php endif; ?>
		<meta name="resource-type" content="Document">
		<meta name="creation_date" content="<?php echo get_post_time('l, F jS, Y, g:i a') ?>">
		<meta name="revised" content="<?php echo get_the_modified_time('l, F jS, Y, g:i a') ?>">

	<!--development info-->
		<meta name="web_author" content="Alumin.Agency">
		<meta name="designer" content="">
		<meta name="template" content="WPKit Framework">
		<meta name="version" content="3.0">
		<!--<meta http-equiv="refresh" content="1"; url=http://google.com"" />-->

	<!--Mobile-->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="<?php if( get_option('option_mobile_callback') ) : echo get_option('option_mobile_callback'); ?><?php else : ?>756<?php endif; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">

	<!--Browser-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
		<meta http-equiv="x-UA-compatible" content="IE=EmulateIE8">	-->

	<!--Icons-->
		<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/apple-startup.png">
		<link rel='apple-touch-icon' href='<?php echo get_template_directory_uri(); ?>/img/touch-icon-ipad.png' sizes='72x72'>
		<link rel='apple-touch-icon' href='<?php echo get_template_directory_uri(); ?>/img/touch-icon-iphone4.png' sizes='114x114'>
		<?php if( get_option( 'option_favicon' ) ) : ?>
			<link rel="icon" type="image/ico" href="<?php echo get_option( 'option_favicon' ); ?>">
		<?php else : ?>
			<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
		<?php endif; ?>
		<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico"><![endif]-->

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_option( 'option_favicon' ); ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<?php if( get_option( 'wk_option_theme_icon' ) ) : ?>
			<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_option( 'wk_option_theme_icon' ); ?>">
		<?php endif; ?>
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#fff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<?php if( get_option( 'wk_option_theme_color' ) ) : ?>
			<meta name="theme-color" content="<?php echo get_option( 'wk_option_theme_color' ); ?>">
		<?php endif; ?>

	<!--Links-->
		<meta name="fragment" content="!" >
		<meta name="url" content="<?php bloginfo('url'); ?>">
		<meta name="identifier-URL" content="<?php bloginfo('url'); ?>">
		<link rel="shortlink" href="<?php if( is_home() ) : bloginfo('url'); else : echo wp_get_shortlink(); endif; ?>">
		<link rel="canonical" href="<?php if( is_front_page() ) : ?><?php bloginfo('url'); ?><?php else : ?><?php echo get_permalink(); ?><?php endif; ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml">
		<?php global $paged;
			if ( get_previous_posts_link() ) : ?>
		    <link rel="prev" href="<?php echo get_pagenum_link( $paged - 1 ); ?>">
		<?php endif; ?>
		<?php if ( get_next_posts_link() ) : ?>
		    <link rel="next" href="<?php echo get_pagenum_link( $paged +1 ); ?>">
		<?php endif; ?>

	<?php if( get_option( 'option_schema_org' ) ) : ?>
	<!--Schema-->
		<?php if ( is_single() || is_page() ) : 
			$schema_name = get_the_title() . ' | ' . get_bloginfo('name'); 
		elseif( is_author() ) : 
			$schema_name = get_the_author() . ' @ ' . get_bloginfo('name'); 
		elseif( is_archive() ) : 
			$schema_name = single_cat_title( "", false ) . ' | ' . get_bloginfo('name'); 
		elseif( is_front_page() && get_option( 'option_schema_name' ) ) :
			$schema_name = get_option( 'option_schema_name' ); 
		else :
			$schema_name = get_bloginfo('name');
		endif; ?>
		<meta itemprop="name" content="<?php echo $schema_name; ?>">
		<meta itemprop="description" content="<?php if ( is_front_page() ) : ?><?php bloginfo('description'); ?><?php else : ?><?php echo get_the_excerpt(); ?><?php  endif; ?>">
		<meta itemprop="image" content="<?php if( is_single() && has_post_thumbnail() ) : ?><?php $attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );  echo $attachment_url[0]; ?><?php elseif( is_attachment() ) : ?><?php echo wp_get_attachment_url($post->id); ?><?php else : ?><?php echo get_option('site_logo'); ?><?php endif; ?>">
	<?php endif; ?>

	<!--Social-->
			<?php global $post; $author_id = $post->post_author; ?>
			<?php if( is_front_page() && get_option('option_google_profile') ) : ?>
		<!--Goolge-->
				<link rel="me" type="text/html" href="<?php echo get_option('option_google_profile'); ?>">
			<?php elseif( ! is_front_page() && get_the_author_meta( 'gplus', $author_id ) ) : ?>
				<link rel="me" type="text/html" href="http://plus.google.com/+<?php the_author_meta( 'gplus', $author_id ); ?>">
			<?php endif; ?>
			<?php if( get_option( 'option_open_graph' ) ) : ?>
		<!--facebook-->
			<?php if( get_option('option_facebook_id') ) : ?>
				<meta name="fb:page_id" content="<?php echo get_option('option_facebook_id'); ?>">
			<?php endif; ?>
			<meta property="og:url" content="<?php if( is_front_page() ) : ?><?php bloginfo('url'); ?><?php else : ?><?php echo get_permalink(); ?><?php endif; ?>">
			<meta property="og:title" content="<?php if ( is_front_page() || is_page()) : if( get_option( 'option_facebook_title' ) ) : echo get_option( 'option_facebook_title' ); else : bloginfo('name'); endif; else : the_title(); endif; ?>">
			<meta property="og:description" content="<?php if( is_front_page() || is_page() ) : if( get_option( 'option_facebook_description' ) ) : echo get_option( 'option_facebook_description' ); else : bloginfo( 'description' ); endif; else : echo get_the_excerpt(); endif; ?>">
			<meta property="og:locale" content="<?php bloginfo('language'); ?>">
			<meta property="og:type" content="<?php if ( is_front_page() ) : ?>website<?php else : ?>article<?php endif; ?>">
			<?php if( is_front_page() && get_option( 'option_facebook_site_image' ) ) : ?>
				<meta property="og:image" content="<?php echo get_option( 'option_facebook_site_image' ); ?>">
			<?php else : ?>
				<?php if( has_post_thumbnail() ) : ?>
					<meta property="og:image" content="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0']; echo $url ?>">
				<?php endif; ?>
			<?php endif; ?>
			<meta property="og:site_name" content="<?php if( get_option( 'option_facebook_site_name' ) ) : echo get_option( 'option_facebook_site_name' ); else : bloginfo('name'); endif; ?>">
			<meta name="og:region" content="MX">
			<meta name="og:country-name" content="Mexico">			
			<?php if( is_single() || is_attachment() ) : ?>
				<?php if( get_option( 'option_facebook_author' ) or get_the_author_meta('facebook', $author_id ) ) : ?>
						<?php if( get_option( 'option_facebook_author_global' ) == 1 ) : ?>
							<?php if( get_option( 'option_facebook_author' ) ) : ?>
								<meta name="article:author" content="<?php echo get_option( 'option_facebook_author' ); ?>">
							<?php else : ?>
								<meta name="article:author" content="http://www.facebook.com/<?php the_author_meta( 'facebook', $author_id ); ?>">
							<?php endif; ?>
						<?php else : ?>
							<?php if( get_the_author_meta('facebook', $author_id ) ) : ?>
								<meta name="article:author" content="http://www.facebook.com/<?php the_author_meta( 'facebook', $author_id ); ?>">
							<?php else : ?>
								<meta name="article:author" content="<?php echo get_option( 'option_facebook_author' ); ?>">
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php else : ?>
					<?php if( get_option( 'option_facebook_author' ) ) : ?>
						<meta name="article:author" content="<?php echo get_option( 'option_facebook_author' ); ?>">
					<?php endif; ?>
				<?php endif; ?>
			<meta property="article:published_time" content="<?php echo get_post_time('c') ?>">
			<meta property="article:modified_time" content="<?php echo get_the_modified_time('c') ?>">
		<?php endif; ?>
		<?php if( get_option( 'option_twitter_cards' ) ) : ?>
		<!--twitter-->
			<meta name="twitter:card" content="<?php if( is_single() && !is_attachment() ) : ?>summary_large_image<?php elseif( is_attachment() ) : ?>photo<?php else : ?>summary<?php endif; ?>">
			<meta name="twitter:site" content="<?php echo get_option('site_twitter_account'); ?>">
			<?php global $post; $author_id = $post->post_author; // global para datos de autor fuera del loop ?>
			<?php if( is_single() || is_attachment() ) : ?>
				<?php if(get_the_author_meta('twitter', $author_id ) ) : ?>
					<meta name="twitter:creator" content="http://www.twitter.com/<?php the_author_meta( 'twitter', $author_id ); ?>">
				<?php elseif( get_option( 'option_twitter_acc' ) ) : ?>
					<meta name="twitter:creator" content="http://www.twitter.com/<?php echo get_option( 'option_twitter_acc' ); ?>">
				<?php endif; ?>
			<?php else : ?>
					<?php if( get_option( 'option_twitter_acc' ) ) : ?>
						<meta name="twitter:creator" content="http://www.twitter.com/<?php echo get_option( 'option_twitter_acc' ); ?>">
					<?php endif; ?>
			<?php endif; ?>
			<meta name="twitter:title" content="<?php if( is_home() ) : if( get_option( 'option_twitter_title' ) ) : echo get_option( 'option_twitter_title' ); else : bloginfo('name'); endif; else : the_title(); endif; ?>">
			<meta name="twitter:description" content="<?php if( is_home() || is_page() ) : if( get_option( 'option_twitter_description' ) ) : echo get_option( 'option_twitter_description' ); else : bloginfo('description'); endif; elseif( is_single() ) : echo get_the_excerpt(); elseif( is_attachment() ) : echo $post->post_content; endif; ?>">
			<?php if( is_home() && get_option( 'option_twitter_image' ) ) : ?>
				<meta name="twitter:image" content="<?php echo get_option( 'option_twitter_image' ); ?>">
			<?php elseif( is_single() && has_post_thumbnail() ) : ?>
				<meta name="twitter:image" content="<?php $attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); echo $attachment_url[0]; ?>">
			<?php elseif( is_attachment() ) : ?>
				<meta name="twitter:image" content="<?php echo wp_get_attachment_url($post->id); ?>">
			<?php endif; ?>
			<?php if( is_attachment() ) : ?>
				<meta name="twitter:url" content="<?php the_permalink(); ?>" />
			<?php endif; ?>
		<?php endif; ?>

   <!--Style-->
		<meta http-equiv="Content-Style-Type" content="text/css">
		<link type="text/css" rel="stylesheet" media="none" onload="if(media!='all')media='all'" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
		<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">-->
		<!--<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">-->
		<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/font-awesome.css">
		<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php bloginfo('stylesheet_url'); ?>">
		<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/css/theme.css">
		<?php if( get_option('option_mobile_callback') ) : $mobile_callback = get_option('option_mobile_callback'); else : $mobile_callback = 770; endif; ?>
		<link type="text/css" rel="stylesheet" media="screen and (max-width:<?php echo $mobile_callback; ?>px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">	
	
	

			