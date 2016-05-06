<?php  get_header();  ?>
<!-- about us -->
    <section>
      <div class="aboutus">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("O-nas") ) : ?>
              <?php endif; ?>  
              <div class="row">
                <div class="col-xs-12 col-md-8">
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
            <div class="col-md-5">
              <img class="none" src="<?php bloginfo('template_directory') ?>/images/worker.png">
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- end about us -->
<?php get_footer(); ?>