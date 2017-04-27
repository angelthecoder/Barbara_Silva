			</main>

			<?php 

				/*
				* Layout de widgets
				*
				* Imprime el layout de widgets en el footer. 
				*
				* Si no ocupas el layout de widgets, desactivalo desde el administrador
				* en WPKit / Layouts en lugar de borrar esta función, Si desactivas la opción
				* desde el administrador se seguirá imprimiendo el menú responsivo.
				*/

				//do_action( 'wk_widgets_footer_layout' ); ?>

				<section class="wk-section">
					
					<div class="wk-section-wrap">

						<footer id="instagram-footer">
							
							<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
							<script type="text/javascript">
// 									var feed = new Instafeed({
// 											get: 'user',
// 											userId: 'hrtzt',
// 											clientId: '1d8c0d36234c44a4855e844a16b07c79',
// 											filter: function(image) {
// 													return image.tags.indexOf('TAG_NAME') >= 0;
// 											}
// 									});
// 									feed.run();
							</script>
							
							<script type="text/javascript">
							
								var userFeed = new Instafeed({
									get: 'user',
									userId: '1158757654',
									clientId: '1d8c0d36234c44a4855e844a16b07c79',
									accessToken: '1158757654.72e693f.505896f5fc594edb8c014a526e20b76d',
									resolution: 'standard_resolution',
									template: '<a href="{{link}}" target="_blank" id="{{id}}" class="bs_instagram_feed_image_source" style="background-image: url({{image}});"></a>',
									sortBy: 'most-liked',
									limit: 6,
									links: true,
								});
								userFeed.run();							
								
							</script>	

							
							<div class="wk-cols">
								<div class="wk-col-2 wk-flex-item wk-flex-align-center wk-flex-justify-center">
									<div class="bs_instagram-headers">
										<span class="bs_follow_me_text bs_title_montserrat">FOLLOW ME ON</span>
										<span class="bs_instagram_text bs_title_mid">Instagram</span>
										<span class="bs_divider" style="width: 60px;"></span>
										<a class="bs_bsoficial_text bs_title_montserrat bs_text_pink" href="http://instagram.com/<?php the_field( 'bs_instagram', 'option' ); ?>" target="_blank">@<?php the_field( 'bs_instagram', 'option' ); ?></a>								
									</div>
								</div>
								<div class="wk-col-6">
									
									<div id="instafeed" style="width: 100%; height: 100%;""></div>					
									
								</div>

								<!-- <div class="wk-col-2">
									<div id="bs_instagram_feed_image-1" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
								</div>

								<div class="wk-col-1">
									<div class="bs_instagram_feed_images"> 
										<div id="bs_instagram_feed_image-2" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
										<div id="bs_instagram_feed_image-3" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
									</div>
								</div>

								<div class="wk-col-2">
									<div id="bs_instagram_feed_image-4" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
								</div>

								<div class="wk-col-1">
									<div class="bs_instagram_feed_images"> 
										<div id="bs_instagram_feed_image-5" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
										<div id="bs_instagram_feed_image-6" class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
									</div>
								</div> -->
							</div>
							

						</footer>
						
					</div>

				</section>

				<section class="wk-section">
					
					<div class="wk-section-wrap">
					
						<footer id="main-footer">

							<div class="wk-cols">
								<div class="wk-col-2e">
									<img id="footer-logo" style="margin-bottom: 14px;" src="<?php echo get_option( 'wk_custom_logo_alt' ); ?> ">
									<div class="bs_title_montserrat">All rights reserved <span class="bs_text_pink"> &copy; <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?></span></div>
								</div>
								<div class="wk-col-2e wk-flex-item wk-flex-align-center wk-flex-justify-end">

									<?php get_template_part( 'includes/social-bar' ); ?>

								</div>
							</div>
							
						</footer>
						
					</div>

				</section>


		</div><!--wrapper-->
			
	</body>
	
	<!--Script-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		
	<?php wp_footer(); ?>

</html>
