<?php
/*
Template Name: Nasze wyróżniki
*/
?>


<?php get_header(); ?>
<!-- our differentiators -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Nasze wyróżniki</h1>
          </div>

          <?php query_posts('category_name=nasze-wyrozniki&posts_per_page=6'); ?> 

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

              <div class="col-md-4 children">
                  <a href="" data-toggle="modal" data-target="#<?php echo the_slug(); ?>">
                    <div class="img">
                      <div class="outer">      
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>         
                        <img height="500" src="<?php echo $image[0]; ?>" class="img-responsive wp-post-image" alt="" />
                      </div>
                    </div>
                  </a>
                  <div class="overflow"></div>
                  <div class="overflow-title">
                    <h4><?php the_title(); ?></h4>
                  </div>
              </div>

              <!-- modal -->
              <div class="modal fade" id="<?php echo the_slug(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                    </div>
                    <div class="modal-body">
                      <?php the_content(); ?> 
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- end modal -->

            <?php endwhile; else: ?>
              <p><?php _e('Brak wyróżników','triclinium') ?></p>
          <?php endif; ?>
          <?php wp_reset_query(); ?>        

        </div>
      </div>    
    </section>  
<!-- end our differentiators -->