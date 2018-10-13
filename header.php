<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <header class="top-bar">
    <div class="top-bar__wrap">
      
    <?php 
      if(has_custom_logo()):
        echo '<div class="top-bar__logoImg">';
        the_custom_logo(); 
        echo '</div>'; 
      else: ?>
        <h1 class="top-bar__siteLogo"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
      <?php endif; ?>
      <div class="top-bar__menu">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'main',
            'menu_id' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </header>
    <?php if(has_header_image() && is_home()): ?>
      <div class="banner" style="background-image: url(<?php header_image(); ?>)">
          <h2 class="banner__title"><?php bloginfo('description'); ?></h2>
      </div>
    <?php endif; ?>
    <?php if(has_header_video()): ?>
      <div class="banner">
        <video class="banner__vid" playsinline autoplay muted loop>
            <source src="<?php the_header_video_url() ?>" type="video/mp4">
        </video>
        <h2 class="banner__title"><?php bloginfo('description'); ?></h2>
      </div>
    <?php endif; ?>
  <main class="container" role="main">