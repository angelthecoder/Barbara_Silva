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

	<?php get_header(); ?>	

			
		<section class="wk-section">

			<div class="wk-section-wrap">

				<article id="post-00" class="bs_post bs_post_white">

					<div class="wk-cols">
						
						<div class="wk-col-2e">
							
							<div class="bs_post_thumb">
								<img class="wk-img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/generic-post-thumb.jpg">
							</div>
							
						</div>

						<div class="wk-col-2e wk-flex-item wk-flex-align-center wk-padding-h-40">

							<div class="bs_post_head">
								
								<header class="bs_post_header">
									<h4 class="bs_post_cat">Editorial</h4>
									<h1 class="bs_post_title">Laureus Sport by Mercedes-Benz</h1>
									<h6 class="bs_post_meta bs_post_meta_topline">May 12, 2017</h6>
								</header>

								<section class="bs_post_excerpt">
									Laureus Sport for Good's goal lis to help young people overcome the limitations imposed by challenging social issues.
								</section>

								<a class="bs_button_o" href="#">Continue Reading</a>
								
							</div>
							
						</div>


					</div>

				</article>


				<article id="post-00" class="bs_post bs_post_reverse">

					<div class="wk-cols">
						
						<div class="wk-col-3">
							
							<div class="bs_post_thumb">
								<img class="wk-img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/generic-post-thumb.jpg">
							</div>
							
						</div>

						<div class="wk-col-5 wk-flex-item wk-flex-align-center wk-padding-h-40">

							<div class="bs_post_head">
								
								<header class="bs_post_header">
									<h4 class="bs_post_cat">Fashion • Catwalk</h4>
									<h1 class="bs_post_title">Laureus Sport by Mercedes-Benz</h1>
									<h6 class="bs_post_meta bs_post_meta_topline">May 12, 2017</h6>
								</header>

								<section class="bs_post_excerpt">
									Laureus Sport for Good's goal lis to help young people overcome the limitations imposed by challenging social issues.
								</section>

								<a class="bs_button_o" href="#">Continue Reading</a>
								
							</div>
							
						</div>


					</div>

				</article>			





				<article id="post-00" class="bs_post">

					<div class="wk-cols">
						
						<div class="wk-col-3">
							
							<div class="bs_post_thumb">
								<img class="wk-img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/generic-post-thumb.jpg">
							</div>
							
						</div>

						<div class="wk-col-5 wk-flex-item wk-flex-align-center wk-padding-h-40">

							<div class="bs_post_head">
								
								<header class="bs_post_header">
									<h4 class="bs_post_cat">Editorial</h4>
									<h1 class="bs_post_title">Laureus Sport by Mercedes-Benz</h1>
									<h6 class="bs_post_meta bs_post_meta_topline">May 12, 2017</h6>
								</header>

								<section class="bs_post_excerpt">
									Laureus Sport for Good's goal lis to help young people overcome the limitations imposed by challenging social issues.
								</section>

								<a class="bs_button_o" href="#">Continue Reading</a>
								
							</div>
							
						</div>


					</div>

				</article>



				<article id="post-00" class="bs_post_full" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-inv.jpg)">		

					<div class="bs_post_head wk-padding-h-40">
						
						<header class="bs_post_header">
							<h4 class="bs_post_cat">Editorial</h4>
							<h1 class="bs_post_title">Laureus Sport by Mercedes-Benz</h1>
							<h6 class="bs_post_meta bs_post_meta_topline">May 12, 2017</h6>
						</header>

						<section class="bs_post_excerpt">
							Laureus Sport for Good's goal lis to help young people overcome the limitations imposed by challenging social issues.
						</section>

					</div>						

					<div class="bs_post_read_more">
						<a class="bs_button" href="#">Continue Reading</a>
					</div>
					
				</article>


				<nav id="pagination">

					<span class="page-numbers current">1</span>
					<a class="page-numbers" href="#">2</a>
					<a class="page-numbers" href="#">3</a>
					<span class="page-numbers dots">…</span>
					<a class="page-numbers" href="#">8</a>
					<a class="next page-numbers" href="#"> »</a>

				</nav>




			</div>

		</section>

			


	<?php get_footer(); ?>
