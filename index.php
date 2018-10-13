<?php get_header(); ?>
  <?php get_search_form(); ?>
  <div class="two__colomns">
    <section class="posts">
      <?php 
        while(have_posts()):the_post();
          get_template_part('templates/card','home');
        endwhile;
      ?>
    </section>
    <?php get_sidebar(); ?>
  </div>
  <?php get_template_part('templates/navigation'); ?>
 <?php get_footer(); ?>