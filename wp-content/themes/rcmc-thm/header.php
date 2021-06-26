<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('title'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/infinite-slider.css" rel="stylesheet">
    		<!-- Custom styles for this template -->
    		<link href="<?php echo get_template_directory_uri(); ?>/css/estilo.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

        <?php wp_head(); ?>
    </head>
  </head>
  <body>
    <header>
      <section id="linha-top">
        <div class="div1"></div>
        <div class="div2">
            <p>Tel: (16) 3378.3154 / 3378.3196 / 3378.3177 <span class="social-header"><a href="#" target="_bank"><i class="fab fa-lg fa-facebook"></i></a><a href="" target="_blank">  <i class="fab fa-lg fa-instagram"></i></a></span></p>
        </div>
      </section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
          <img src="http://recimec.com.br/wp-content/uploads/2018/04/recimec-logo.png" width="300" alt="">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse w-100" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <ul>
                <?php wp_nav_menu(); ?>

              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
