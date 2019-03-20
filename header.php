<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/zdo_drawer_menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="header-inner">
      <div class="header-left">
        <h1 class="site-title">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </h1>
      </div><!-- .site-title -->

      <div class="header-right">
      <ul class="social-media-icons">
            <a href="<?php echo the_author_meta('twitter_url',1);?>"><li><span class="twitter"></span></li></a>
            <a href="<?php echo the_author_meta('facebook_url',1);?>"><li><span class="facebook"></span></li></a>
            <a href="<?php echo the_author_meta('instagram_url',1);?>"><li><span class="insta"></span></li></a>
          </ul>
        <div class="zdo_drawer_menu">
          <div class="zdo_drawer_bg"></div>
          <button type="button" class="zdo_drawer_button">
            <span class="zdo_drawer_bar zdo_drawer_bar1"></span>
            <span class="zdo_drawer_bar zdo_drawer_bar2"></span>
            <span class="zdo_drawer_bar zdo_drawer_bar3"></span>
            <span class="zdo_drawer_close zdo_drawer_text">CLOSE</span>
          </button>
          <nav class="zdo_drawer_nav_wrapper">
            <?php get_sidebar(); ?>
          </nav>
        </div>

      </div>
    </div>
  </header>