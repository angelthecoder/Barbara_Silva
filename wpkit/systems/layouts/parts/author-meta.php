<?php 
/**
*
*  Es el template general para crear nuevas páginas.
*
* @see get_the_author_meta()
* @see get_avatar()
* @see the_author_meta()
* @see get_author_posts_url() 
*
* @uses the_author_meta( $profile_fields )            Valores personalizados: twitter, facebook, gplus, instagram, pinterest
* @uses get_field('wk_custom_avatar', 'user_' . $author_ID )
*
* @package WPKit
* @author ALUMIN
* @version WPKIT 2.0
*/
?>

      <section class="author-meta">

            <div id="user-avatar">
                  
                  <?php

                        $author_meta = get_the_author_meta('ID'); 

                        // Gravatar
                              //echo get_avatar( $author_meta , 64 ); 

                        // ACF custom avatar
                              $wk_avatar = get_field('wk_custom_avatar', 'user_' . $author_meta ); 
                              if( $wk_avatar ) :
                                    echo '<img width="64" src="' . $wk_avatar['url'] . '">';
                              else :
                                    echo '<img width="64" src="' . get_template_directory_uri() . '/wpkit/img/avatar.png">';
                              endif;

                  ?>

            </div>
            
            <div id="user-info">

                  <h3 class="user-meta" itemprop="name"><?php the_author_meta('display_name') ?></h3>
                  
                  <a class="user-meta" href="http://www.twitter.com/<?php the_author_meta('twitter'); ?>" target="_blank">Twitter: <?php the_author_meta('twitter'); ?></a> 
                  
                  <span class="user-meta" itemprop="description"><?php the_author_meta('description'); ?></span>                   

                  <?php if( is_single() ) : ?>

                        <a href="<?php echo  get_author_posts_url(get_the_author_meta('ID')); ?>">Ver todos los posts de <?php the_author_meta('display_name') ?></a>

                  <?php endif; ?>

            </div>


      </section>