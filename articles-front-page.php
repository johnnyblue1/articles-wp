<!-- article -->
    <section>
      <div class="container container-no-padding">
        <div class="row">

        <?php query_posts('category_name=aktualnosci&posts_per_page=4'); ?> 
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

            <div class="col-xs-12 col-sm-6">
              <div class='news bg-link'>
                <article>
                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>
                  <?php $content = get_the_content();
                    $content = substr($content,0,180);
                    echo $content;
                  ?>...
                </p>
              
                <i class="fa fa-calendar"></i> <?php the_time('d-m-Y'); ?> | <i class="fa fa-bookmark-o"></i> <?php single_cat_title( '', true ); ?>
                </br>
                <a class="btn-a" href="<?php echo get_permalink(); ?>">Czytaj więcej <i class="fa fa-chevron-right"></i></a>
                </article>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class='imgbg' style="background-image: url('<?php echo $image[0]; ?>')"></div>
              </div>
            </div>
          <?php endwhile; else: ?>
              <p><?php _e('Brak wpisów','triclinium') ?></p>
          <?php endif; ?>
         <?php wp_reset_query(); ?>     

        </div>
      </div>
    </section>
<!-- end article -->