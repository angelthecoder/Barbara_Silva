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
							
							<div class="wk-cols">
								<div class="wk-col-2 wk-flex-item wk-flex-align-center wk-flex-justify-center">
									<div class="bs_instagram-headers">
										<span class="bs_follow_me_text bs_title_montserrat">FOLLOW ME ON</span>
										<span class="bs_instagram_text bs_title_mid">Instagram</span>
										<span class="bs_divider" style="width: 60px;"></span>
										<span class="bs_bsoficial_text bs_title_montserrat bs_text_pink">@BarbaraSilvaOficial</span>								
									</div>
								</div>

								<div class="wk-col-2">
									<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
								</div>

								<div class="wk-col-1">
									<div class="bs_instagram_feed_images"> 
										<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
										<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
									</div>
								</div>

								<div class="wk-col-2">
									<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
								</div>

								<div class="wk-col-1">
									<div class="bs_instagram_feed_images"> 
										<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
										<div class="bs_instagram_feed_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/generic-thumb-square-inv.jpg)"></div>
									</div>
								</div>
							</div>

						</footer>
						
					</div>

				</section>

				<section class="wk-section">
					
					<div class="wk-section-wrap">
					
						<footer id="main-footer">

							<div class="wk-cols">
								<div class="wk-col-2e">
									<img style="margin-bottom: 14px;" src="<?php echo get_template_directory_uri(); ?>/img/logo-alt.png">
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
