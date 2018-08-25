<?php
register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu' ));

function create_post_type() {
  register_post_type( 'course',
    array(
      'labels' => array(
        'name' => __( 'Course' ),
        'singular_name' => __( 'Course' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
}

add_action( 'init', 'create_post_type' );
add_theme_support('post-thumbnails');

add_image_size( 'post-size', 720, 300, true );
add_image_size( 'large-post-size', 1024, 400, true );
add_image_size( 'card-size', 520, 400, true );
add_image_size( 'banner-size', 9999, 400, true );
