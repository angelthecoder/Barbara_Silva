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
                             
	<?php if ( is_preview()) : ?><div class="site-notice"><?php echo edit_post_link('Regresa a editar'); ?></div><?php endif; ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('bs_article'); ?>>

			<?php if( has_term( 'editorial', 'category' ) ) : ?>

				<?php get_template_part( 'includes/post_per_category/editorial' ); ?>

			<?php elseif( has_term( array( 'fashion', 'catwalk', 'fashion-week' ), 'category' ) ) : ?>

				<?php get_template_part( 'includes/post_per_category/fashion' ); ?>

			<?php elseif( has_term( array( 'bloom', 'health', 'beauty', 'zen' ), 'category' ) ) : ?>

				<?php get_template_part( 'includes/post_per_category/bloom' ); ?>

			<?php elseif( has_term( array( 'lifestyle', 'events', 'inspiration', 'my-everyday', 'travel' ), 'category' ) ) : ?>

				<?php get_template_part( 'includes/post_per_category/lifestyle' ); ?>

			<?php endif; ?>	            		

		</article>

	<?php endwhile; wp_reset_postdata(); endif; ?>

	<aside class="wk-section">
		
		<div class="wk-section-wrap">
			
			<?php 

			/*
			*
			* Related posts
			*
			*/

			do_action( 'bs_related_posts' ); ?>
			
		</div>		

	</aside>

	<footer id="comments" class="wk-section">
		
		<div class="wk-section-wrap">

			<div id="disqus_thread"></div>
			<script>

				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://barbarasilva.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			
		</div>
		
	</footer>
                                

<?php get_footer(); ?>