<!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
           <div class="col-md-12">
             <h1>SKONTAKTUJ <span>się z nami!</span></h1>
             <p>Chętnie odpowiemy na każde Twoje pytanie, nawiążemy współpracę lub umówimy Cię na zabiegi testowe w Tricilium</p>
           </div>

          <?php query_posts('category_name=kontakt&posts_per_page=3'); ?> 
        
            <?php if (have_posts()) : ?>
            <?php $my_post_count = $wp_query->post_count; ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php if (($my_post_count) == 1) : ?>

                  <div class="col-sm-6 col-md-4"></div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img class="img-circle " src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                      <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('opis'); ?></p>
                        <p><i class="fa fa-phone"></i> <?php the_field('telefon'); ?></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4"></div>

                <?php elseif (($my_post_count) == 2) : ?> 

                  <div class="col-sm-6 col-md-2"></div>     

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img class="img-circle " src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                      <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('opis'); ?></p>
                        <p><i class="fa fa-phone"></i> <?php the_field('telefon'); ?></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-2"></div>

                <?php elseif (($my_post_count) == 3) : ?>      

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img class="img-circle " src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                      <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('opis'); ?></p>
                        <p><i class="fa fa-phone"></i> <?php the_field('telefon'); ?></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                      </div>
                    </div>
                  </div>
            
                <?php endif; ?>
              <?php endwhile; else: ?>
                  <p><?php _e('Brak kontaktów','triclinium') ?></p>
            <?php endif; ?>
          <?php wp_reset_query(); ?>  

        </div>
      </div>
    </footer>
    <!-- end footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/copy.js">
    <script src="<?php bloginfo('template_directory') ?>/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/scripts.js"></script>

  <?php wp_footer(); ?>     
  </body>

</html>
