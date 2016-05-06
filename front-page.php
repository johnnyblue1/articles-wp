<?php get_header(); ?>

<!-- header -->
    <header >
      <div class="container">
        <div class="row">
          <div class="col-md-12 header-img" style="background: url(<?php bloginfo('template_directory') ?>/images/home.png) top left no-repeat;">
            <div class="container-text">
              <h1>Zapraszamy do biura</br>prasowego <strong>Triclinium</strong></h1>
              <p>Dziennikarzu, blogerze, częstuj się i inspiruj naszą wiedzą</br>i informacjami o <strong>medycynie estetycznej</strong></p>
              <a class="btn-m" href="o-triclinium">Dowiedz się więcej <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>  
        </div>  
      </div>  
    </header>
<!-- end header -->

    <?php get_template_part( 'articles-front-page' ); ?>

    <!-- social hr -->
    <div class="container-fluid no-padding-container-fluid">
      <h2 class="background double"><span>wieści z naszych <strong>kanałów społecznościowych</strong></span></h2>
    </div>
    <!-- end social hr -->


    <!-- social news -->
    <section>
      <div class="container">
        <div class="row">

          <?php query_posts('category_name=social&posts_per_page=6'); ?> 
        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <a target="_blank" href="<?php the_field('link_do_portalu_społecznościowego'); ?>"><img src="<?php echo $image[0]; ?>" width="360" height="240" alt="..."></a>
                  <div class="caption">
                    <?php 
                      $field = get_field_object('jaki_portal');
                      $value = get_field('jaki_portal');
                      $label = $field['choices'][ $value ];
                    ?>
                    <?php if ($label == 'YouTube') { ?>
                      <i class="social-ico fa fa-youtube"></i>
                    <?php } elseif ($label == 'Facebook') { ?>
                      <i class="social-ico fa fa-facebook"></i>
                    <?php } elseif ($label == 'Blog') { ?>
                      <i class="social-ico fa fa-twitch"></i>
                    <?php }  ?>
                        
                    <a target="_blank" href="<?php the_field('link_do_portalu_społecznościowego'); ?>"><h3><?php the_title(); ?></h3></a>
                    <p>
                      <?php $content = get_the_content();
                        $content = substr($content,0,60);
                        echo $content;
                      ?>...
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile; else: ?>
              <p><?php _e('Brak wpisów w kanałach społecznościowych','triclinium') ?></p>
          <?php endif; ?>
         <?php wp_reset_query(); ?>    


        </div>
      </div>
    </section>
    <!-- endsocial news -->

    <?php get_template_part( 'about' ); ?>

<?php get_footer(); ?>

