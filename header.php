<!DOCTYPE html>
<html lang="pl">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/favicon.ico">

    <title><?php bloginfo('name'); ?> <?php  wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,500,600,800,700|Open+Sans:400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php bloginfo('template_directory') ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Styles page -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">

    <script src="<?php bloginfo('template_directory') ?>/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <!-- facebook scritp -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.5";
     fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));</script>
    <!-- end facebook scritp -->

    <!-- top -->
    <div class="top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-3 col-md-offset-7">
              <?php get_search_form(); ?>
          </div>
          <div class="col-xs-12 col-md-2">
            <ul class="social">
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://triclinium.pl/"><img src="<?php bloginfo('template_directory') ?>/images/fb.png"></a></li>
              <li><a href=""><img src="<?php bloginfo('template_directory') ?>/images/twit.png"></a></li>
              <li><a href=""><img src="<?php bloginfo('template_directory') ?>/images/gplus.png"></a></li>
              <li><a href=""><img src="<?php bloginfo('template_directory') ?>/images/insta.png"></a></li>
            </ul>
          </div>
        </div>  
      </div>  
    </div>
    <!-- end top -->

    <!-- nav -->
    <nav class="navbar navbar-default navbar">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"></a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- end nav -->