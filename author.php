<?php get_header(); ?>  
  <header class="archive__header">
    <h2 class="archive__title">Página autor: <?php the_author_meta('display_name'); ?></h2>
    <div class="archive__avatar">
      <?php echo get_avatar(get_the_author_meta('ID')); ?>
      <?php the_author_meta('description'); ?>
    </div>
  </header>
  <?php
    while(have_posts()):the_post();
      get_template_part('templates/card','home');
    endwhile;
  ?>
<?php get_footer(); ?>