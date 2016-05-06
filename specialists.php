<?php
/*
Template Name: Specjalisci
*/
?>

<?php  get_header();  ?>
<!-- our specialists -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Nasi specjaliści</h1>
          </div>

          <?php query_posts('category_name=specjalisci&posts_per_page=10'); ?> 
        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

              <div class="col-md-6 specialists">
                <div class="row">
                  <div class="col-md-3">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img class="img-circle teams" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                  </div> 
                  <div class="col-md-9">
                    <h5><?php the_title(); ?></h5>
                    <p>
                        <?php $content = get_the_content(); $content = substr($content,0,180);
                        echo $content; ?>...
                    </p>
                    <a class="btn-team" href="" data-toggle="modal" data-target="#<?php echo the_slug_specialists(); ?>">Czytaj więcej</a>
                  </div>   
                </div>
                <hr>
              </div>

              <!-- modal -->
              <div class="modal fade" id="<?php echo the_slug_specialists(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img class="img-circle modal-team" src="<?php echo $image[0]; ?>" alt="...">
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
              <p><?php _e('Brak specjalistów','triclinium') ?></p>
          <?php endif; ?>
         <?php wp_reset_query(); ?>       
          
        </div>
      </div>
    </section>
<!-- end our specialists -->   

<?php get_footer(); ?>      