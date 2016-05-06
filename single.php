<?php get_header(); ?>

<!-- header -->
    <header >
      <div class="container">
        <div class="row">
          <div class="col-md-12 header-img" style="background: url('<?php $image = get_field('header'); if( !empty($image) ) { ?><?php the_field('header');  ?><?php } else { ?><?php bloginfo('template_directory') ?>/images/home.png<?php } ?>') top left no-repeat;">
            <div class="container-text">
              <h1><?php the_title(); ?></h1>
              <p><i class="fa fa-calendar"></i> <?php the_time('d-m-Y'); ?></p>
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
            
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    </br>
                    <?php the_content(); ?> 
                  <?php endwhile; else: ?>
              <p><?php _e('Brak wpisów.'); ?></p>
            <?php endif; ?>

            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

            <div class="row">
              <div class="col-md-3">
                <a class="btn-main" id="copyButton2" href="#" >Kopiuj treść</a>
                <span id="msg"></span>
              </div>
              <div class="col-md-3">
                  <a class="btn-main" href="<?php the_field('dokument_doc'); ?>" target="_blank"><i class="fa fa-file-word-o"></i> Pobierz w doc</a>
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
                    $width = '149';
                    $height = '85';
                ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_1');  ?>" download>
                      <img src="<?php the_field('zdjęcie_1');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_2');
                  if( !empty($image) ): 
                    $width = '149';
                    $height = '85';
                ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_2');  ?>" download>
                      <img src="<?php the_field('zdjęcie_2');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_3');
                  if( !empty($image) ): 
                    $width = '149';
                    $height = '85';
                ?>
                  <div class="col-md-6">
                    <a href="<?php the_field('zdjęcie_3');  ?>" download>
                      <img src="<?php the_field('zdjęcie_3');  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </a>
                  </div>  
                <?php endif; ?>

                <?php $image = get_field('zdjęcie_4');
                  if( !empty($image) ): 
                    $width = '149';
                    $height = '85';
                ?>
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

    <!-- about specialist -->
    <div class="group-team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Informacje o <strong>specjaliście</strong></h1>
          </div>

          <?php 
            function the_slug_specialist() {
                $post_data = get_post($post->ID, ARRAY_A);
                $slug = $post_data['post_name'];
                return $slug; 
            }
          ?>

          <?php
            $specjalista = get_field('specjalista');
            if( $specjalista ): 
              // override $post
              $post = $specjalista;
              setup_postdata( $post );
          ?>

              <div class="col-md-6 specialists">
                <div class="row">
                  <div class="col-md-3">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img class="img-circle teams" src="<?php echo $image[0]; ?>" alt="...">
                  </div> 
                  <div class="col-md-9">
                    <h5><?php the_title(); ?></h5>
                    <p>
                      <?php $content = get_the_content();
                        $content = substr($content,0,180);
                        echo $content;
                      ?>...
                    </p>
                    <a class="btn-team" href="" data-toggle="modal" data-target="#<?php echo the_slug_specialist(); ?>">Czytaj więcej</a>
                  </div>   
                </div>
              </div>

              <!-- modal -->
              <div class="modal fade" id="<?php echo the_slug_specialist(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          

          <div class="col-md-6"></br>
            <h5>Chcesz otrzymywać na swoją skrzynkę więcej ciekawych informacji o medycynie estetycznej?<br>Powiedz nam coś o sobie i zapisz się do listy mailingowej.</h4>

              <div class="row">
                <div class="col-xs-12 col-md-9">
                  <form method="post" action="https://app.freshmail.com/pl/actions/subscribe/">
                    <input type="hidden" name="subscribers_list_hash" value="u1yllp4emo" />

                    <input type="email" id="freshmail_email" name="freshmail_email" class="form-control input-sm" placeholder="twojadres@email.com" required>
                    
                    Jestem
                    <input type="radio" name="inlineRadioOptions" class="dziennikarz" id="inlineRadio1" value="option1" />dziennikarzem, blogerem
                    <input type="radio" name="inlineRadioOptions" class="spozamediow" id="inlineRadio2" value="option2" />osobą spoza mediów

                    <div id="dziennikarz">
                    <input type="text" id="fm_tytul_lub_link_do_twojego_medium" name="freshmail_custom_field[tytul_lub_link_do_twojego_medium]" class="form-control input-sm" placeholder="Tytuł lub link do Twojego medium">
                    <button class="btn btn-default" type="submit">Zapisz się</button>
                    </div>

                    <div id="spozamediow">
                      <div class="row">
                        <div class="col-xs-6">
                          <input type="text" class="form-control input-sm" placeholder="Skąd jestes?">
                        </div>
                        <div class="col-xs-6">
                          <input type="text" class="form-control input-sm" placeholder="Ile masz lat?">
                        </div>
                      </div>
                      <button class="btn btn-default" type="submit">Zapisz się</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>

        </div>
      </div>    
    </div>
    <!-- end about specialist -->

    <div class="clearfix"></div>

<?php get_footer(); ?>
