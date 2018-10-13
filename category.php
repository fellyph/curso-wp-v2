<?php get_header(); ?>
  <header class="archive__header">
    <!-- se eu estive na categoria desenvolvimento carrego o banner -->
    <?php if(is_category('desenvolvimento')): ?>
      <img class="archive__banner" src="<?php bloginfo('template_url') ?>/assets/imgs/banner-desenvolvimento.jpg" />
    <?php else: ?>
    <!-- se n carrega o titulo -->
      <h2 class="archive__title"><?php single_cat_title(); ?></h2>
    <?php endif; ?>
    
    <div class="archive__description">
      <?php echo category_description(); ?>
    </div>
    </header>
  <?php 
    while(have_posts()):the_post();
      get_template_part('templates/card','archive');
    endwhile;
  ?>
  <?php get_sidebar('category'); ?>
  <?php get_template_part('templates/navigation'); ?>
<?php get_footer(); ?>