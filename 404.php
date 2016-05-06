<?php  get_header();  ?>
<!-- header -->
    <header >
      <div class="container">
        <div class="row">
          <div class="col-md-12 header-img" style="background: url(<?php bloginfo('template_directory') ?>/images/about.png) top left no-repeat;">
            <div class="container-text">
              <h1>Błąd <strong>404</strong></h1>
              <p>Nie znaleziono strony</p>
            </div>
          </div>  
        </div>  
      </div>  
    </header>
<!-- end header -->

<!-- content article -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>  
                <?php endwhile; else: ?>
                <h1><?php _e('Błąd 404'); ?></h1>
            <?php endif; ?>
            <?php wp_reset_query(); ?>  
           
          </div>
          
        </div>
        <hr>
      </div>  
    </section>
    <!-- end content article -->

<?php  get_footer();  ?>
