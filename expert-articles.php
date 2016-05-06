<?php
/*
Template Name: Artykuły eksperckie
*/
?>

<?php  get_header();  ?>

<!-- header -->
    <header >
      <div class="container">
        <div class="row">
          <div class="col-md-12 header-img" style="background: url(<?php bloginfo('template_directory') ?>/images/aktualnosci-eksperckie.png) top left no-repeat;">
            <div class="container-text">
              <h1>Artykuły <strong>eksperckie</strong></h1>
              <p>Poznaj zabiegi, metody, preparaty i urządzenia wykorzystywane w Tricilinium.</br>Poznaj dobre praktyki w medycynie estetycznej, stomatologii i ortodoncji wyznawane przez naszych lekarzy. </p>
            </div>
          </div>  
        </div>  
      </div>  
    </header>
<!-- end header -->

<!-- article -->
    <section>
      <div class="container container-no-padding">
        <div class="row">

        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 'category_name' => 'artykuly-eksperckie', 'paged' => $paged );
          query_posts($args);
        ?>
        
          <?php if (have_posts()) : ?>
          <?php $my_post_count = $wp_query->post_count; ?>
          <?php while (have_posts()) : the_post(); ?> 

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
              <p><?php _e('Brak wpisów','najlepsidoradcy') ?></p>
          <?php endif; ?>

          <?php if (($my_post_count) > 10) : ?>

            <div class="row">
               <div class="col-md-12">
                  <nav>
                    <ul class="pager">
                      <li><?php echo custom_pagination(); ?></li>
                    </ul>
                  </nav>
               </div> 
            </div>  

          <?php endif; ?>  

         <?php wp_reset_query(); ?>     

        </div>
      </div>
    </section>
    <!-- end article -->

    <?php get_template_part( 'about' ); ?>

<?php get_footer(); ?>    