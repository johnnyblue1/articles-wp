<?php get_header(); ?>

<!-- header -->
    <header >
      <div class="container">
        <div class="row">
          <div class="col-md-12 header-img" style="background: url(<?php bloginfo('template_directory') ?>/images/about.png) top left no-repeat;">
            <div class="container-text">
              <h1>Centrum medycyny estetycznej</br><strong>Triclinium</strong></h1>
              <p>Poznaj dobre praktyki w medycynie estetycznej</p>
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
          <div class="col-md-8">
<div id="copyTarget2">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?> 
<?php endwhile; else: ?>
<p><?php _e('Brak wpisów.'); ?></p>
<?php endif; ?>
</div>
            <div class="fb-like" data-href="https://www.facebook.com/Triclinium-622498681163860/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

            <div class="row">
              <div class="col-md-3">
                <a class="btn-main" id="copyButton2" href="#" >Kopiuj treść</a>
                <span id="msg"></span>
              </div>
              <div class="col-md-3">
                <?php if( get_field('dokument_doc') ): ?>
                  <a class="btn-main" href="<?php the_field('dokument_doc'); ?>" target="_blank"><i class="fa fa-file-word-o"></i> Pobierz w doc</a>
                <?php endif; ?>  
              </div>  
              <div class="col-md-3">
                <?php if (function_exists("wpptopdfenh_display_icon")) echo wpptopdfenh_display_icon();?>
              </div>  
              <div class="col-md-3">
                <a class="btn-main" href="">Pobierz wszystkie</a>
              </div>    
            </div>  
          </div>
          <div class="col-md-4">
            <div class="download">
              <div class="row">
                <?php $image = get_field('zdjęcie_1');
                  if( !empty($image) ): 
                    // thumbnail
                    $width = '149';
                    $height = '85';
                    if( $caption ): ?>
                    <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_1');  ?>" download>
                      <img src="<?php the_field('zdjęcie_1');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_2');
                  if( !empty($image) ): 
                    // thumbnail
                    $width = '149';
                    $height = '85';
                    if( $caption ): ?>
                    <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_2');  ?>" download>
                      <img src="<?php the_field('zdjęcie_2');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_3');
                  if( !empty($image) ): 
                    // thumbnail
                    $width = '149';
                    $height = '85';
                    if( $caption ): ?>
                    <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_3');  ?>" download>
                      <img src="<?php the_field('zdjęcie_3');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_4');
                  if( !empty($image) ): 
                    // thumbnail
                    $width = '149';
                    $height = '85';
                    if( $caption ): ?>
                    <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_4');  ?>" download>
                      <img src="<?php the_field('zdjęcie_4');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <div class="col-md-12">
                 <i class="fa fa-download"></i> Pobierz zdjęcia
                </div>
              </div>  
            </div>
          </div>    
        </div>
        <hr>
      </div>  
    </section>
    <!-- end content article -->

    <?php get_template_part( 'differentiators' ); ?>

    <?php get_template_part( 'specialists' ); ?>

<?php get_footer(); ?>