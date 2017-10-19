<?php if( get_option( 'option_private_site' ) ) { if( ! is_user_logged_in() ) { get_template_part( 'wpkit/inc/login' ); return true; } }
/**
*  Página Single
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*/
get_header(); ?>

		<section id="bs_post_feed" class="wk-section">

			<div class="wk-section-wrap">

				<?php if( have_posts() ) : $n = 0; $m = 1; while( have_posts() ) : $n++; the_post(); ?>

					<?php if( has_term( 'editorial', 'category' ) ) : ?>

						<article id="post-<?php echo $n; ?>" <?php post_class( 'bs_post bs_post_white' ); ?>>

							<div class="wk-cols bs_section_mobil">

								<div class="wk-col-2e">

									<div class="bs_post_thumb">
										<img class="wk-img-responsive" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>">
									</div>

								</div>

								<div class="wk-col-2e wk-flex-item wk-flex-align-center wk-padding-h-40">

									<?php

				        			/*
				        			*
				        			* Llama a la cabecera del post
				        			*
				        			*/

				        			do_action( 'bs_post_head' ); ?>

								</div>


							</div>

						</article>

						<!--=================== Cherry Bomb MX (Angel del Rock) ===================-->

					<?php elseif( has_term( array( 'bloom', 'health', 'beauty', 'zen' ) , 'category' ) ) : $m++; ?>

					<article id="post-<?php echo $n; ?>-fashion-<?php echo $m; ?>" <?php post_class( 'bs_post bs_post_fashion' ); ?>>

						<div class="wk-cols bs_section_mobil <?php if( $m % 2 == 1 ) : echo 'wk-flex-row-reverse'; endif; ?>">

							<div class="wk-col-3">

								<div class="bs_post_thumb">
									<img class="wk-img-responsive" src="<?php the_post_thumbnail_url( 'post-feed-thumbnail' ); ?>">
								</div>

							</div>

							<div class="wk-col-5 wk-flex-item wk-flex-align-center wk-padding-h-40 <?php if( $m % 2 == 1 ) : echo 'wk-flex-row-reverse wk-text-right'; endif; ?>">

								<?php

										/*
										*
										* Llama a la cabecera del post
										*
										*/

										do_action( 'bs_post_head' ); ?>

							</div>


						</div>

					</article>

					<!--=================== Cherry Bomb MX (Angel del Rock) ===================-->

					<?php elseif( has_term( array( 'fashion', 'catwalk', 'fashion-week' ) , 'category' ) ) : $m++; ?>

						<article id="post-<?php echo $n; ?>-fashion-<?php echo $m; ?>" <?php post_class( 'bs_post bs_post_fashion' ); ?>>

							<div class="wk-cols bs_section_mobil <?php if( $m % 2 == 1 ) : echo 'wk-flex-row-reverse'; endif; ?>">

								<div class="wk-col-3">

									<div class="bs_post_thumb">
										<img class="wk-img-responsive" src="<?php the_post_thumbnail_url( 'post-feed-thumbnail' ); ?>">
									</div>

								</div>

								<div class="wk-col-5 wk-flex-item wk-flex-align-center wk-padding-h-40 <?php if( $m % 2 == 1 ) : echo 'wk-flex-row-reverse wk-text-right'; endif; ?>">

									<?php

				        			/*
				        			*
				        			* Llama a la cabecera del post
				        			*
				        			*/

				        			do_action( 'bs_post_head' ); ?>

								</div>


							</div>

						</article>

					<?php elseif( has_term( array( 'lifestyle', 'events', 'inspiration', 'my-everyday', 'travel' ) , 'category' ) ) : ?>

						<article id="post-<?php echo $n; ?>" <?php post_class( 'bs_post_full' ); ?> style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>)">

							<?php

		        			/*
		        			*
		        			* Llama a la cabecera del post
		        			*
		        			*/

		        			do_action( 'bs_post_head' ); ?>

						</article>

					<?php endif; ?>

				<?php endwhile; endif; ?>

					<!--
						<article id="post-00" class="bs_post bs_post_reverse">

							<div class="wk-cols bs_section_mobil">

								<div class="wk-col-3">

									<div class="bs_post_thumb">
										<img class="wk-img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/generic-post-thumb.jpg">
									</div>

								</div>

								<div class="wk-col-5 wk-flex-item wk-flex-align-center wk-padding-h-40">

									<?php

				        			/*
				        			*
				        			* Llama a la cabecera del post
				        			*
				        			*/

				        			do_action( 'bs_post_head' ); ?>

								</div>

							</div>

						</article>	 -->

				  <nav id="pagination">

				  	<div class="bs_pagination_container">

			            <?php

			                  global $wp_query;
			                  $pagination = 999999999; // se necesita especificar un número poco probable de posts para mostrar

			                  echo paginate_links( array(
			                        'base' => str_replace( $pagination, '%#%', esc_url( get_pagenum_link( $pagination ) ) ),
			                        'current' => max( 1, get_query_var('paged') ),
			                        'format' => '?paged=%#%',
			                        'total' => $wp_query->max_num_pages,
			                        'prev_next'    => True,
			                        'prev_text'    => __('Prev Page '),
			                        'next_text'    => __(' Next Page')
			                  ) );

			            ?>

				  	</div>

			      </nav>

			</div>

		</section>

	<?php get_footer(); ?>
