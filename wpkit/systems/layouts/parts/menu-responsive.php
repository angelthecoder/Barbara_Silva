<?php 
/**
*
*  Menú responsivo, usa OKnav.js
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*/

	global $is_IE; 

    if( ! $is_IE) : $classes[] = 'iexplorer'; if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version)) $classes[] = 'iexplorer'.$browser_version[1]; 
		
        // Si la opción OkNay está activada en WPKit / Librerías         
        if( get_option( 'wk_option_library_oknav' ) ) : ?>

            <div id="header-container" class="wk-section">
                <section class="wk-section-wrap">
                    <header id="header-okaynav" class="okayNav-headers">
                            <a style="height: 100%;" id="logo" class="okayNav-header__logo" href="<?php bloginfo( 'url' ); ?>">
                                <?php if ( get_option('custom_logo') ) : ?>
                                   <img width="140" src="<?php echo get_option( 'custom_logo' ); ?>">
                                <?php else : ?>
                                    <img width="140" src="<?php echo get_template_directory_uri(); ?>/wpkit/admin/img/wpkit-logo.svg">
                               <?php endif; ?>
                            </a>
                            <?php get_template_part('wpkit/systems/layouts/parts/menu-main'); ?> 
                    </header>                
                </section>
            </div> 

        <?php else : ?>
           
            <div id="header-container" class="wk-section">
                <section class="wk-section-wrap">
                    <header id="header" class="">
                        <a style="height: 100%;" id="logo" class="" href="<?php bloginfo( 'url' ); ?>">
                            <?php if ( get_option('custom_logo') ) : ?>
                               <img width="140" src="<?php echo get_option( 'custom_logo' ); ?>">
                            <?php else : ?>
                                <img width="140" src="<?php echo get_template_directory_uri(); ?>/wpkit/admin/img/wpkit-logo.svg">
                           <?php endif; ?>
                        </a>
                        <div class="wk-d">
                            <?php get_template_part('wpkit/systems/layouts/parts/menu-main'); ?>                             
                        </div>
                        <div class="wk-m"><span id="off-canvas-icon" class="fa fa-bars"></span></div>
                    </header>                
                </section>
            </div> 

            <?php get_template_part( 'wpkit/systems/layouts/parts/menu-mobile' ); ?>       

        <?php endif; ?>

    <?php endif;
