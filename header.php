<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display:400,700" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
   <?php wp_head(); ?>
 </head>
</head>
<body <?php body_class(); ?>>
  <header class="top-bar">
    <div class="top-bar__wrap">
      <h1 class="top-bar__site-logo"><?php bloginfo('name'); ?></h1>
      <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'top-bar__menu') ); ?>
    </div>
  </header>